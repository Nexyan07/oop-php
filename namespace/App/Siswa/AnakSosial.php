<?php

class anakSosial extends Siswa implements infoSiswa {
    public $organisasi;
    
    public function __construct($nama = "unknown", $kelas = "unknown", $organisasi = null) {
        parent::__construct($nama, $kelas);
        $this->organisasi = $organisasi;
    }

    public function getInfoSiswa() {
        $str = $this->getInfo() . " ~ " . $this->organisasi;
        return $str;
    }

    public function getInfo() {
        $str = "Siswa = " . $this->getLabel();
        return $str;
    }
}