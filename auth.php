<?php
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == "admin" && $pass == "admin"){
        //buat sesion
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = "Nur Rachmat";
        $_SESSION['level'] = "Mahasiswa";

         //membuat cookie
        setcookie("jammasuk", date("Y-m-d H:i:s"), time() + 60);

        //arahkan ke halaman index
        header("Location: index.php");
    }else{
        //lempar/arahkan ke halaman login
        header("Location: login.php");
    }
}else{
    //lempar/arahkan ke halaman login
    header("Location: login.php");
}
?>