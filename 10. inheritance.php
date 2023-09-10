<?php
    class Persegi{
        public $panjang;
        public $lebar;

        function luasPersegi(){
            return $this->panjang * $this->lebar;
        }

        function kelilingPersegi(){
            return 2*($this->panjang + $this->lebar);
        }
    }

    class Balok extends Persegi{
        public $tinggi;

        function volumeBalok(){
            return ($this->tinggi * $this->lebar * $this->panjang);
        }

        function luasBalok(){
            return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
        }
    }

    $kotak = new Balok;
    $kotak->panjang = 2;
    $kotak->lebar = 3;
    $kotak->tinggi = 5;

    echo "luas persegi merupakan method dari luas parent";
    echo "<br>Luas Persegi: ". $kotak->luasPersegi();
    echo "<br><br>Keliling persegi merupakan method dari luas parent";
    echo "<br>Keliling Persegi: ". $kotak->kelilingPersegi();
    echo "<br><br>luas Balok merupakan method dari luas parent";
    echo "<br>Luas Balok: ". $kotak->luasBalok();
    echo "<br><br>Volumes persegi merupakan method dari luas parent";
    echo "<br>Volume Persegi: ". $kotak->volumeBalok();
    // echo "luas persegi merupakan method dari luas parent";
    // echo "<br>Luas Persegi: ". $this->luasPersegi();
?>
