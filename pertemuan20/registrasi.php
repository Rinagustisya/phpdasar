<?php
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
             </script>";
    } else {
        echo mysqli_error($conn);
    }
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
     <title>Halaman Registrasi</title>
     <style>
         label {
             display: block;
         }
     </style>
</head>
<body>

<h1>Halaman Registrasi</h1>

<form action="" method="post">

    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" required>
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2" required>
        </li>
        <li>
            <button type="submit" name="register">Sign Up</button>
        </li>
        <br>
        <li>
            <a href="login.php">Kembali ke halaman login</a>
        </li>
    </ul>

</form>
     
</body>
</html>