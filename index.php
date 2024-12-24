<?php

class Siswa {
    public $nama, $kelas;

    public function __construct($nama = "unknown", $kelas = "unknown") {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    public function getLabel() {
       return "$this->nama, $this->kelas"; 
    }
}

class CetakInfoSiswa {
    public function cetak($siswa) {
        $str = "{$siswa->nama} | {$siswa->kelas}";
        return $str;
    }
}
$siswa1 = new Siswa("Anto", "XII RPL");
$siswa2 = new Siswa("Nabila", "XII TJKT A");
$siswa3 = new Siswa();
echo "nama = " . $siswa1->nama . "<br>" . "kelas = " . $siswa1->kelas;
echo "<br>";
echo "nama = " . $siswa2->nama . "<br>" . "kelas = " . $siswa2->kelas;
echo "<br>";
echo "nama = " . $siswa3->nama . "<br> kelas = " . $siswa3->kelas;
echo "<br>";
$infoSiswa1 = new CetakInfoSiswa();
echo $infoSiswa1->cetak($siswa1);