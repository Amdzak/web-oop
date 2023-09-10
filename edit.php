<?php
    include "koneksi.php";
    $db = new database();

    if($_GET["nim"] == null){
        header("location: tampil.php");
    }
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
        <h3 style="text-align:center">Edit Data Mahasiswa</h3>
        <br>
        <form action="proses.php?aksi=update" method="post">
            <?php foreach($db->edit($_GET["nim"]) as $data):?>
            <div class="mb-2">
                <label for="nim" class="form-label">NIM</label>
                <input style="width:600px" name="nim" type="text" class="form-control" id="nim" value="<?= $data["nim"] ?>" readonly required>
            </div>
            <div class="mb-2">
                <label for="nama" class="form-label">NAMA</label>
                <input style="width:600px" name="nama" type="text" class="form-control" id="nama" value="<?= $data["nama"] ?>" required>
            </div>
            <div class="mb-2">
                <label for="alamat" class="form-label">ALAMAT</label>
                <input style="width:600px" name="alamat" type="text" class="form-control" id="alamat" value="<?= $data["alamat"] ?>" required>
            </div>
            <div class="mb-2">
                <label for="telepon" class="form-label">TELEPON</label>
                <input style="width:600px" name="telepon" type="text" class="form-control" id="telepon" value="<?= $data["telepon"] ?>" required>
            </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>