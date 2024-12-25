<?php

// class ContohStatic {
//     public static $angka = 1;
//     public static function halo() {
//         return "Halo " . self::$angka++ . " kali";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo ContohStatic::halo();
// echo "<hr>";

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj1 = new Contoh;
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();

