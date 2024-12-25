<?php
// tidak bisa dimasukkan ke class
define('NAMA', 'Anto');
echo NAMA;

// bisa dimasukkan ke class
const UMUR = 17;
echo UMUR;

// class Coba {
//     const NAMA = 'Nabila';
// }

// echo Coba::NAMA;

// menampilkan baris kode
echo __LINE__;

// alamat file
 echo __FILE__;

 // alamat folder sebelumnya
 echo __DIR__;

//  menampilkan nama function
 function coba() {
    return __FUNCTION__;
 }
echo coba();

// menampilkan nama class
class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;

echo __TRAIT__;
echo __METHOD__;
echo __NAMESPACE__;