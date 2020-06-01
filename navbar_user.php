<?php   
include 'koneksi.php';
ob_start();
session_start();
if (!isset($_SESSION['akun_id']))header("location: login.php");
  {

}
?>
<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="dashboard.php">Hany Catering</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu1-user.php">Makan Siang<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu2-user.php">Cemilan<span class="sr-only">(current)</span></a>
          </li>
          
         <li class="nav-item">
            <a class="nav-link" href="contact.php">Info</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <a class="btn btn-outline-primary" href="logout.php">Log Out</a>
          </form>
      </div>
    </nav>
  </head>