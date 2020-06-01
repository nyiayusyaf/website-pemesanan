<?php 
include 'header.php';
include 'koneksi.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = mysql_query("SELECT * FROM pemesanan WHERE id= $id");
	$data =mysql_fetch_assoc($query); 
    
    ?>
<body>
	<h2 class="text">Detail Pembayaran</h2>
	<hr class="featurette-divider">
	<div class="row featurette">
		<div class="container white shadow" >
	<p> Hi! Pesanan atas nama <?php echo $data['nama'];?> dengan kode makanan <?php echo $data['kode'];?> sebanyak <?php echo $data['qty'];?> box untuk tanggal <?php echo $data['tgl_pengiriman'];?> akan kami proses. Silahkan transfer ke rekening 1234567xxxx, kirim kan bukti transfer ke nomor 0856152855 ini</p>
	<a class="btn btn-primary" href="dashboard.php">Lanjutkan Pemesanan</a>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>
<?php
	}
?>