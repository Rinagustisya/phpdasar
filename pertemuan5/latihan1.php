<?php
// array
// variabel yg dapat memiliki banyak warna
// elemen pda array boleh memiliki tipe data yg berbeda
// pasangan antara key dan value
// key-nya adalah index, yg dimulai dari 0

// mumbuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// array dgn cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// bisa pake : var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>
