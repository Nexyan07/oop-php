<?php

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