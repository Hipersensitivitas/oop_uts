<?php

class Hewan {
    protected $nama;
    protected $tinggi;
    private $berat;
    private $suara;

    public function __construct($nama, $tinggi, $berat, $suara = null) {
        $this->nama = $nama;
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->suara = $suara;
    }

    // Method untuk mengakses berat
    public function getBerat() {
        return $this->berat;
    }

    // Method untuk mengubah berat (Setter untuk berat)
    protected function setBerat($beratBaru) {
        $this->berat = $beratBaru;
    }

    // Method untuk mengakses suara
    public function getSuara() {
        return $this->suara ?? "Tidak memiliki suara";
    }
}

// Child class Anjing
class Anjing extends Hewan {
    private $jenis;

    public function __construct($nama, $tinggi, $berat, $jenis, $suara = "Gonggong") {
        parent::__construct($nama, $tinggi, $berat, $suara);
        $this->jenis = $jenis;
    }

    // Method manipulasi 1: Menambah berat anjing
    public function tambahBerat($kg) {
        $beratSaatIni = $this->getBerat(); // Mengambil berat saat ini
        $this->setBerat($beratSaatIni + $kg); // Mengatur berat baru menggunakan setter
    }

    // Method manipulasi 2: Mengubah jenis anjing
    public function ubahJenis($jenisBaru) {
        $this->jenis = $jenisBaru;
    }

    // Getter untuk jenis
    public function getJenis() {
        return $this->jenis;
    }

    // Setter untuk jenis
    public function setJenis($jenisBaru) {
        $this->jenis = $jenisBaru;
    }
}

// Child class Kucing
class Kucing extends Hewan {
    private $warna;

    public function __construct($nama, $tinggi, $berat, $warna, $suara = "Meong") {
        parent::__construct($nama, $tinggi, $berat, $suara);
        $this->warna = $warna;
    }

    // Method manipulasi 1: Menambah tinggi kucing
    public function tambahTinggi($cm) {
        $this->tinggi += $cm;
    }

    // Method manipulasi 2: Mengubah warna kucing
    public function ubahWarna($warnaBaru) {
        $this->warna = $warnaBaru;
    }

    // Getter untuk warna
    public function getWarna() {
        return $this->warna;
    }

    // Setter untuk warna
    public function setWarna($warnaBaru) {
        $this->warna = $warnaBaru;
    }
}

// Contoh penggunaan
$anjing = new Anjing("Rex", 50, 20, "Bulldog");
echo $anjing->getSuara(); // Gonggong
echo "\n";
$anjing->tambahBerat(2); // Menambah berat
echo $anjing->getBerat(); // 22
echo "\n";
echo $anjing->getJenis(); // Bulldog
echo "\n";
$anjing->ubahJenis("Labrador");
echo $anjing->getJenis(); // Labrador

$kucing = new Kucing("Tom", 30, 5, "Hitam");
echo $kucing->getSuara(); // Meong
echo "\n";
$kucing->tambahTinggi(5); // Menambah tinggi
echo $kucing->getBerat(); // 5
echo "\n";
echo $kucing->getWarna(); // Hitam
$kucing->ubahWarna("Putih");
echo "\n";
echo $kucing->getWarna(); // Putih
?>
