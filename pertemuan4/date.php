<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l,d-M-Y");

//Time
// UNIX Timestamo / EPOCH time
// (3angka awal) detik yg sudah berlalu sejak 1 januari 1970
// echo time();
// menghitung 8 hari kedepan
// echo date("d M Y", time()+60*60*24*8);
// menghitung 10 hari kebelakang
// echo date("d M Y", time()-60*60*24*10);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l,d-M-Y", mktime(0,0,0,1,6,2006));

// strtotime
echo date("l", strtotime("06 jan 2006"));
?>
