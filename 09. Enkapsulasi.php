<?php 
    class Buku{
        public $judul;
        private $harga;
        protected $penerbit;

        function __construct($judul,$harga,$penerbit){
            $this->judul = $judul;
            $this->harga = $harga;
            $this->penerbit = $penerbit;
        }

        function cetakBuku(){
            return "cetak sebuah buku";
        }
        
        function getJudul(){
            return $this->judul;
        }
        
        function getHarga(){
            return $this->harga;
        }
        
        function getPenerbit(){
            return $this->penerbit;
        }

    }

    $bukuPaket = new Buku("Belajar PHP",20000,"Erlagga");
    echo "Nama Buku: ". $bukuPaket->getJudul();
    echo "<br>";
    echo "Harga: ". $bukuPaket->getHarga();
    echo "<br>";
    echo "Penerbit: ". $bukuPaket->getPenerbit();
?>