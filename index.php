<?php

class Siswa {
    public $nama, $kelas, $organisasi, $bahasaPemrograman, $type;

    public function __construct($nama = "unknown", $kelas = "unknown", $organisasi = null, $bahasaPemrograman = null, $type = null) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->organisasi = $organisasi;
        $this->bahasaPemrograman = $bahasaPemrograman;
        $this->type = $type;
    }

    public function getLabel() {
       return "$this->nama, $this->kelas"; 
    }
    public function getInfoLengkap() {
        $str = "{$this->type} : {$this->getLabel()}";
        if($this->type === "anak autodidak") {
            $str .= " ~ {$this->bahasaPemrograman}";
        } else if($this->type === "anak sosial") {
            $str .= " ~ {$this->organisasi}";
        }
        return $str;
    }
}

class CetakInfoSiswa {
    public function cetak( Siswa $siswa ) {
        $str = "{$siswa->nama} | {$siswa->kelas}";
        return $str;
    }
}
$siswa1 = new Siswa("Anto", "XII RPL", null, "php", "anak autodidak");
$siswa2 = new Siswa("Nabila", "XII TJKT A", "PMR", null, "anak sosial");
$siswa3 = new Siswa();
echo "nama = " . $siswa1->nama . "<br>" . "kelas = " . $siswa1->kelas;
echo "<br>";
echo "nama = " . $siswa2->nama . "<br>" . "kelas = " . $siswa2->kelas;
echo "<br>";
echo "nama = " . $siswa3->nama . "<br> kelas = " . $siswa3->kelas;
echo "<br>";
echo $siswa2->getInfoLengkap();
echo "<br>";
$infoSiswa1 = new CetakInfoSiswa();
echo $infoSiswa1->cetak($siswa1);