<?php

class Siswa {
    private $nama, $kelas, $type;

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
    public function getNama() {
        return $this->nama;
    }
    public function setNama( $nama ) {
        if(!is_string($nama)){
            throw new Exception("Nama harus berisi huruf");
        }
        $this->nama = $nama;
    }
    public function getKelas() {
        return $this->kelas;
    }
    public function setKelas( $kelas ) {
        if(!is_string($kelas)){
            throw new Exception("Kelas harus berisi huruf");
        }
        $this->kelas = $kelas;
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
echo $siswa1->getInfoSiswa();
echo "<br>";
echo $siswa2->getInfoSiswa();
echo "<br>";
echo $siswa3->getInfoSiswa();
echo "<br>";
$infoSiswa1 = new CetakInfoSiswa();
echo $infoSiswa1->cetak($siswa1);
echo "<br>";
$siswa1->setNama("Bilaaa");
$siswa1->setKelas("XII TJKT A");
echo $siswa1->getNama();
echo $siswa1->getKelas();