<?php
    include "koneksi.php";
    $db = new database();

    $hasil = $db->tampilData();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3 style="text-align:center"> Data Mahasiswa</h3>
        <table class="table table-striped table-hover">
            <tr>
                <th width="50px"> No</th>
                <th width="120px"> Nim</th>
                <th width="300px"> Nama</th>
                <th width="300px"> Alamat</th>
                <th width="200px"> Telepon</th>
                <th width="200px"> Aksi</th>
            </tr>
            <?php 
            $no = 1;
            foreach ($hasil as $data) :    
            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data["nim"]?></td>
                <td><?= $data["nama"]?></td>
                <td><?= $data["alamat"]?></td>
                <td><?= $data["telepon"]?></td>
                <td>
                    <a href="edit.php?nim=<?= $data["nim"]?>&aksi=edit">Edit | </a>
                    <a href="proses.php?nim=<?= $data["nim"]?>&aksi=hapus" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                </td>
            </tr>
            <?php   endforeach;?>
        </table>
        <br>
        <h3>Tambah Data Mahasiswa</h3>
        <form action="proses.php?aksi=tambah" method="post">
            <div class="mb-2">
                <label for="nim" class="form-label">NIM</label>
                <input style="width:600px" name="nim" type="text" class="form-control" id="nim" placeholder="Masukan NIM" required>
            </div>
            <div class="mb-2">
                <label for="nama" class="form-label">NAMA</label>
                <input style="width:600px" name="nama" type="text" class="form-control" id="nama" placeholder="Masukan nama" required>
            </div>
            <div class="mb-2">
                <label for="alamat" class="form-label">ALAMAT</label>
                <input style="width:600px" name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan alamat" required>
            </div>
            <div class="mb-2">
                <label for="telepon" class="form-label">TELEPON</label>
                <input style="width:600px" name="telepon" type="text" class="form-control" id="telepon" placeholder="Masukan telepon" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>