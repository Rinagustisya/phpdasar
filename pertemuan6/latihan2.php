<?php
// $mahasiswa = [
//     ["M.Zanuar Prasetyo", "009876511", "Teknik Informatika", "mzanuarprasetyo@gmail.com"],
//     ["Harist Abrar", "009888754", "Hukum", "hristabrar@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yg kita bua sendiri
$mahasiswa = [
    [
    "nama" => "M.Zanuar Prasetyo",
    "nrp" => "009876511",
    "email" => "mznuar@gmail.com",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "gambar" => "zanuar.jpg" 
    ],
    [
        "nama" => "Agung Setiawan",
        "nrp" => "009876739",
        "email" => "agungsetiaone@gmail.com",
        "jurusan" => "Teknik Kendaraan Ringan Otomotif",
        "gambar" => "agung.jpg"
    ],
    [
        "nama" => "Arya Dana Astanahudi",
        "nrp" => "005876548",
        "email" => "aryadna@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "dana.jpg"
        ]
];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
          <li>No : <?= $mhs["nrp"]; ?></li>
          <li>Email : <?= $mhs["email"]; ?></li>
          <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
         <?php endforeach; ?>
</html>
