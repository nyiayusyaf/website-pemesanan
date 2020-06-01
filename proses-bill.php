<?php
include 'koneksi.php';
  if(isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $qty = $_POST['qty'];
    $kota = $_POST['kota'];
    $order = date('y-m-d');
    $delivery = $_POST['tgl'];
    $result = mysql_query("INSERT INTO pemesanan VALUES('','$name','$telepon','$alamat','$kota','$qty','$order','$delivery')");
}  
$query = mysql_query("SELECT id FROM pemesanan where id=(SELECT MAX(id) FROM pemesanan)");
$ids = mysql_fetch_array($query);
$id = $ids['id'];

header("location:pemesanan.php?id=".$id);
  
?>