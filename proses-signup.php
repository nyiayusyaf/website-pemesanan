<?php
include 'koneksi.php';
  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysql_query("INSERT INTO akun VALUES('','$name','$username','$email','$password','')");
	}
  header("location:login.php");
?>