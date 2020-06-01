<?php
include 'koneksi.php';
ob_start();
session_start();
if(isset($_SESSION['username']))
include "koneksi.php";

if(isset($_POST['submit'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql_login = mysql_query("SELECT * FROM akun WHERE(username = '$username' OR email = '$username') AND password = '$password'");

   if(mysql_num_rows($sql_login)>0) {
      $row_akun = mysql_fetch_array($sql_login);
      $_SESSION['akun_id'] = $row_akun['id'];
      $_SESSION['akun_username'] = $row_akun['username'];
      $_SESSION['akun_statusakun'] = $row_akun['id_statusakun'];
         if($_SESSION['akun_statusakun'] == '1') {
            header("location:adminlte/produk1.php");
        }else {
            header("location:dashboard.php");
        }
    }else {
        header("location:login.php?gagal");
    }
}
        ?>