<?php

class Siswa {
    public $nama, $kelas, $type;

    public function __construct($nama = "unknown", $kelas = "unknown") {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function getLabel() {
       return "$this->nama, $this->kelas"; 
    }
    
    public function getInfoSiswa() {
        $str = "Siswa = " . $this->getLabel();
        return $str;
    }
}

class CetakInfoSiswa {
    public function cetak( Siswa $siswa ) {
        $str = "{$siswa->nama} | {$siswa->kelas}";
        return $str;
    }
}

class anakSosial extends Siswa {
    public $organisasi;

    public function __construct($nama = "unknown", $kelas = "unknown", $organisasi = null) {
        parent::__construct($nama, $kelas);
        $this->organisasi = $organisasi;
    }

    public function getInfoSiswa() {
        $str = "Siswa = " . parent::getInfoSiswa() . " ~ " . $this->organisasi;
        return $str;
    }
}

class anakAutodidak extends Siswa {
    public $bahasaPemrograman;

    public function __construct($nama = "unknown", $kelas = "unknown", $bahasaPemrograman = null) {
        parent::__construct($nama, $kelas);
        $this->bahasaPemrograman = $bahasaPemrograman;
    }

    public function getInfoSiswa() {
        $str = "Siswa = " . parent::getInfoSiswa() . " ~ " . $this->bahasaPemrograman;
        return $str;
    }
}


$siswa1 = new anakAutodidak("Anto", "XII RPL", "php");
$siswa2 = new anakSosial("Nabila", "XII TJKT A", "PMR");
$siswa3 = new Siswa();
echo "nama = " . $siswa1->nama . "<br>" . "kelas = " . $siswa1->kelas;
echo "<br>";
echo "nama = " . $siswa2->nama . "<br>" . "kelas = " . $siswa2->kelas;
echo "<br>";
echo "nama = " . $siswa3->nama . "<br> kelas = " . $siswa3->kelas;
echo "<br>";
echo $siswa1->getInfoSiswa();
echo "<br>";
echo $siswa2->getInfoSiswa();
echo "<br>";
echo $siswa3->getInfoSiswa();
echo "<br>";
$infoSiswa1 = new CetakInfoSiswa();
echo $infoSiswa1->cetak($siswa1);