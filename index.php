<?php

interface InfoSiswa {
    public function getInfoSiswa();
}

abstract class Siswa {
    private $nama, $kelas, $type;

    public function __construct($nama = "unknown", $kelas = "unknown") {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function getLabel() {
       return "$this->nama, $this->kelas"; 
    }
    
    abstract public function getInfo();

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


class anakSosial extends Siswa implements infoSiswa {
    public $organisasi;
    
    public function __construct($nama = "unknown", $kelas = "unknown", $organisasi = null) {
        parent::__construct($nama, $kelas);
        $this->organisasi = $organisasi;
    }

    public function getInfoSiswa() {
        $str = "Siswa = " . $this->getInfo() . " ~ " . $this->organisasi;
        return $str;
    }

    public function getInfo() {
        $str = "Siswa = " . $this->getLabel();
        return $str;
    }
}

class anakAutodidak extends Siswa implements infoSiswa {
    public $bahasaPemrograman;
    
    public function __construct($nama = "unknown", $kelas = "unknown", $bahasaPemrograman = null) {
        parent::__construct($nama, $kelas);
        $this->bahasaPemrograman = $bahasaPemrograman;
    }
    
    public function getInfoSiswa() {
        $str = "Siswa = " . $this->getInfo() . " ~ " . $this->bahasaPemrograman;
        return $str;
    }

    public function getInfo() {
        $str = "Siswa = " . $this->getLabel();
        return $str;
    }
}

class CetakInfoSiswa {
    public $daftarSiswa = array();

    public function tambahSiswa(Siswa $siswa) {
        $this->daftarSiswa[] = $siswa;
    }
    public function cetak() {
        $str = "Daftar Siswa : <br>";
        foreach($this->daftarSiswa as $s) {
            $str .= "~ {$s->getInfoSiswa()} <br>";
        }
        return $str;
    }
}

$siswa1 = new anakAutodidak("Anto", "XII RPL", "php");
$siswa2 = new anakSosial("Nabila", "XII TJKT A", "PMR");

echo $siswa1->getInfoSiswa();
echo "<br>";
echo $siswa2->getInfoSiswa();
echo "<br>";
$siswa1->setNama("Bilaaa");
$siswa1->setKelas("XII TJKT A");
echo $siswa1->getNama();
echo $siswa1->getKelas();
echo "<hr>";
$cetakSiswa = new CetakInfoSiswa();
$cetakSiswa->tambahSiswa($siswa1);
$cetakSiswa->tambahSiswa($siswa2);
echo $cetakSiswa->cetak();