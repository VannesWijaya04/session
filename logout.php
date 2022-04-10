<?php 
 session_start();
 session_destroy(); // menghapus semua sesion
 //unset($_SESSION['user']);

 //lempar/arahkan ke halaman login
 header("Location: login.php");
?>