<?php
global $koneksi;

$server = "localhost";
$user = "root";
$password = "";
$database = "catering";
$koneksi = mysql_connect($server, $user, $password) or die("gagal menghubungkan");
mysql_select_db($database, $koneksi) or die("database tidak ada");

?>