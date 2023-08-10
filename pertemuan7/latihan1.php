<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "Muhammad Zanuar Prasetyo",
    "nrp" => "009876511",
    "email" => "mznuar@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "zanuar.jpg" 
    ],
    [
        "nama" => "Agung Setiawan",
        "nrp" => "009876739",
        "email" => "agungsetiaone@gmail.com",
        "jurusan" => "Teknik Otomotif",
        "gambar" => "agung.jpg"
    ]
 ];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
      <title>GET</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
        </ul>
      
 </body>
 </html>
