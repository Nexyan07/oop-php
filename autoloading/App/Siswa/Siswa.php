<?php

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