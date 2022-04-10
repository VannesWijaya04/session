<?php
    session_start(); //memulai session
    if(!isset($_SESSION['user'])){
        //lempar/arahkan ke halaman login
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dashboard</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $_SESSION['nama'];?></h1>
    <p>Waktu login : <?php echo isset($_COOKIE['jammasuk']) ? $_COOKIE['jammasuk'] : "Tidak Tersedia";?></p>
    <a href="profil.php">Profil</a><br/>
    <a href="logout.php">Logout</a>
</body>
</html>