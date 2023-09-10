<?php
    include "koneksi.php";
    $db = new database();

    if($_GET > 0){
        header("location: tampil.php");
    }
    $aksi = $_GET["aksi"];
    
    if($aksi == "tambah"){
        $db->input($_POST["nim"],$_POST["nama"],$_POST["alamat"],$_POST["telepon"],);
        header("location: tampil.php");
    } elseif ($aksi == "hapus"){
        $db->hapus($_GET["nim"]);

        echo"
        <script>
        confirm('Data berhasil di Hapus');
        window.location.href = 'tampil.php'; 
        </script>
        ";
    } elseif ($aksi == "edit"){
        $db->edit($_GET["nim"]);
        header("location: tampil.php");
    } elseif ($aksi == "update") {
        $ok = $db->update($_POST["nim"],$_POST["nama"],$_POST["alamat"],$_POST["telepon"]);
        header("location: tampil.php");
    }
?>