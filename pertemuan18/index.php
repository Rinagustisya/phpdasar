<?php
session_start();

if( !isset($_SESSION["login"]) ) {
     header("Location: login.php");
     exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
     $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
     <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">LOG OUT!</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br></br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan kalimat!" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

</form>
<br></br>

<!-- navigasi halaman -->

<?php if(  $halamanAktif > 1 ) : ?>
     <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
     <?php if( $i == $halamanAktif ) : ?>
     <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
     <?php else : ?>
          <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
     <?php endif; ?>
<?php endfor; ?>

<?php if(  $halamanAktif < $jumlahHalaman ) : ?>
     <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>
<table border="1" cellpadding="10" cellspacing="0">

<tr>
     <th>No.</th>
     <th>Aksi</th>
     <th>Gambar</th>
     <th>Nama</th>
     <th>NRP</th>
     <th>Email</th>
     <th>Jurusan</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row ) : ?>
<tr>
     <td><?= $i; ?></td>
     <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin dihapus ta masseh?');">Hapus</a>
     </td>
     <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
     <td><?= $row["nama"]; ?></td>
     <td><?= $row["nrp"]; ?></td>
     <td><?= $row["email"]; ?></td>
     <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>

