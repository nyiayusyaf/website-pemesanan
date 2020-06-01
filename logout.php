<?php
	include 'koneksi.php';
     session_start();
     $_SESSION["akun_id"];
     $_SESSION["akun_username"];
     $_SESSION["akun_statusakun"];

     unset($_SESSION["akun_id"]);
     unset($_SESSION["akun_username"]);
     unset($_SESSION["akun_statusakun"]);

     session_unset();
     session_destroy();

     header("location:login.php");
	
?>