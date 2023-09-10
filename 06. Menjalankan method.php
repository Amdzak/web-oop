<?php
    class kendaraan{
        public $jenis;
        public $merek;
        public $warna;

        function harga(){
            if ($this->jenis == "SUV" && $this->merek == "honda" && $this->warna = "merah"){
                echo "Rp 400000000";
            } else {
                echo "Rp 15000000";
            }
        }
    }

    $motor = new kendaraan;
    $motor->jenis = "SUV";
    $motor->merek = "honda";
    $motor->warna = "merah";
    $motor->harga();
    echo"<br>";
    $mobil = new kendaraan;
    $motor->jenis = "SUV";
    $motor->merek = "toyota";
    $motor->warna = "putih";
    $motor->harga();

?>