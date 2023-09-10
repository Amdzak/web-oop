<?php
class database{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "politeknik";
    public $connect;

    function __construct(){
        $this->connect = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if ($this->connect->connect_errno) {
            echo "db tidak ada";
            exit;
        }
    }

    function tampilData(){
        $data = "SELECT * FROM mahasiswa";
        $query = $this->connect->query($data);
        while ($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function input($nim,$nama,$alamat,$telephone){
        $insert = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$alamat','$telephone')";
        $result = $this->connect->query($insert);
    }

    function hapus($nim){
        $delete = "DELETE FROM mahasiswa WHERE nim = '$nim'";
        $result = $this->connect->query($delete);
    }

    function edit($nim){
        $data = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        $hasil = $this->connect->query($data);
        while ($data = mysqli_fetch_array($hasil)){
            $ress[] = $data;
        }
        return $ress;
    }

    function update($nim,$nama,$alamat,$telephone){
        $update = "UPDATE mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat',telepon='$telephone' WHERE nim='$nim'";
        $hasil = $this->connect->query($update);
    }
}
?>