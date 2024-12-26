<?php

require_once 'autoloading/App/init.php';

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