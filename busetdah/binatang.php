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

    public function getBerat() {
        return $this->berat;
    }

    protected function setBerat($beratBaru) {
        $this->berat = $beratBaru;
    }

    public function getSuara() {
        return $this->suara ?? "Tidak memiliki suara";
    }

    public function getNama() {
        return $this->nama;
    }

    public function getTinggi() {
        return $this->tinggi;
    }
}

class Anjing extends Hewan {
    private $jenis;

    public function __construct($nama, $tinggi, $berat, $jenis, $suara = "Gonggong") {
        parent::__construct($nama, $tinggi, $berat, $suara); // Memanggil konstruktor parent
        $this->jenis = $jenis;
    }

    public function tambahBerat($kg) {
        $beratSaatIni = $this->getBerat();
        $this->setBerat($beratSaatIni + $kg); // Mengubah berat anjing
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function setJenis($jenisBaru) {
        $this->jenis = $jenisBaru;
    }

    public function ubahJenis($jenisBaru) {
        $this->jenis = $jenisBaru;
    }
}

class Kucing extends Hewan {
    private $warna;

    public function __construct($nama, $tinggi, $berat, $warna, $suara = "Meong") {
        parent::__construct($nama, $tinggi, $berat, $suara); // Memanggil konstruktor parent
        $this->warna = $warna;
    }

    public function tambahTinggi($cm) {
        $this->tinggi += $cm; // Menambah tinggi kucing
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warnaBaru) {
        $this->warna = $warnaBaru;
    }

    public function ubahWarna($warnaBaru) {
        $this->warna = $warnaBaru;
    }
}

// Contoh penggunaan
$anjing = new Anjing("Rex", 50, 20, "Bulldog");
echo "Anjing: <br>";
echo "Nama: " . $anjing->getNama() . "<br>";
echo "Tinggi: " . $anjing->getTinggi() . " cm<br>";
echo "Berat: " . $anjing->getBerat() . " kg<br>";
echo "Suara: " . $anjing->getSuara() . "<br>";
echo "Jenis: " . $anjing->getJenis() . "<br><br>";

$anjing->tambahBerat(2); // Menambah berat anjing
echo "Setelah menambah berat: <br>";
echo "Berat: " . $anjing->getBerat() . " kg<br>";
$anjing->ubahJenis("Labrador");
echo "Jenis baru: " . $anjing->getJenis() . "<br><br>";

$kucing = new Kucing("Tom", 30, 5, "Hitam");
echo "Kucing: <br>";
echo "Nama: " . $kucing->getNama() . "<br>";
echo "Tinggi: " . $kucing->getTinggi() . " cm<br>";
echo "Berat: " . $kucing->getBerat() . " kg<br>";
echo "Suara: " . $kucing->getSuara() . "<br>";
echo "Warna: " . $kucing->getWarna() . "<br><br>";

$kucing->tambahTinggi(5); // Menambah tinggi kucing
echo "Setelah menambah tinggi: <br>";
echo "Tinggi: " . $kucing->getTinggi() . " cm<br>";

$kucing->ubahWarna("Putih");
echo "Warna baru: " . $kucing->getWarna() . "<br><br>";

?>
