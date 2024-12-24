<?php

class Siswa {
    public $nama, $kelas;

    public function __construct($nama, $kelas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function getLabel() {
       return "$this->nama, $this->kelas"; 
    }
}
$siswa1 = new Siswa("Anto", "XII RPL");
$siswa2 = new Siswa("Nabila", "XII TJKT A");
echo "nama = " . $siswa1->nama . "<br>" . "kelas = " . $siswa1->kelas;
echo "<br>";
echo "nama = " . $siswa2->nama . "<br>" . "kelas = " . $siswa2->kelas;
