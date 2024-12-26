<?php

class anakAutodidak extends Siswa implements infoSiswa {
    public $bahasaPemrograman;
    
    public function __construct($nama = "unknown", $kelas = "unknown", $bahasaPemrograman = null) {
        parent::__construct($nama, $kelas);
        $this->bahasaPemrograman = $bahasaPemrograman;
    }
    
    public function getInfoSiswa() {
        $str = $this->getInfo() . " ~ " . $this->bahasaPemrograman;
        return $str;
    }

    public function getInfo() {
        $str = "Siswa = " . $this->getLabel();
        return $str;
    }
}