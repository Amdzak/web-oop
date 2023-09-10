<?php
    class kendaraan {
        private $jenis;
        private $merek;
        private $warna;

        function __construct($jenis,$merek,$warna){
            $this->jenis = $jenis;
            $this->merek = $merek;
            $this->warna = $warna;
        }

        function getJenis(){
            return $this->jenis;
        }

        function getMerek(){
            return $this->merek;
        }

        function getWarna(){
            return $this->warna;
        }
    }

    $mobil = new kendaraan("City car","Ford","Ungu");
    echo "Jenis : ".$mobil->getJenis()." merek ".$mobil->getMerek()." berwarna ".$mobil->getWarna()."<br>"  ;
?>