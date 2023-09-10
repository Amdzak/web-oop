<?php
    class kendaraan{
        private $jenis;
        private $merek;
        private $warna;

        function setJenis($jenis){
            $this->jenis = $jenis;
        }
        
        function setMerek($merek){
            $this->merek = $merek;
        }
        
        function setWarna($warna){
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

    $mobil = new kendaraan;
    $mobil->setMerek("Suzuki");
    $mobil->setJenis("SUV");
    $mobil->setWarna("Biru");

    echo "Jenis : ".$mobil->getJenis()." merek ".$mobil->getMerek()." berwarna ".$mobil->getWarna()."<br>"  ;

    $mobil2 = new kendaraan;
    $mobil2->setMerek("Chervolet");
    $mobil2->setJenis("Car city");
    $mobil2->setWarna("Hijau");

    echo "Jenis : ".$mobil2->getJenis()." merek ".$mobil2->getMerek()." berwarna ".$mobil2->getWarna();


?>