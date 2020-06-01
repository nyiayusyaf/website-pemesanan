<?php include 'header.php';?>
<body>
    <div class="container">
      <p><div class="alert alert-warning" role="alert">
  <center>Form Order Hany Catering</center>
  </div>
	<form action='save-order-tg.php' method='post'>   
	 <table class="table table-striped">   
	   <tbody>
        <tr>
        <th scope="row">Nama</th>
	    <td></td>
        <td></td>
        <td><input type="text" class="form-control" name="nama"></td>
        </tr>
        <tr>
        <th scope="row">Alamat lengkap</th>
	    <td></td>
        <td></td>
        <td><textarea class="form-control" rows="3" name="alamat"></textarea></td>        
        </tr>
        <tr>
          <tr>
        <th scope="row">Kota</th>
      <td></td>
        <td></td>
        <td><input type="text" class="form-control" name="kota"></td>
        </tr>
        <th scope="row">HP</th>
	    <td></td>
        <td></td>
        <td><input type="text" class="form-control" name="hp"></td>
        </tr>

	</tbody>
	</table>
	<br/><br/>
	<div class='alert alert-info' role='alert'>
	<center>Daftar item yang dipesan</center>
	</div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Qty</th>
    </tr>
  </thead>
  <tbody>
    <?php
  include"koneksi.php";
  $sql = "select nama,harga from produk ORDER BY nama";
  $tampilkan = mysql_query($sql); 
  while($select_result = mysql_fetch_array($tampilkan))
	{
	$nama	 	= $select_result['nama'] ;
	$harga	 	= $select_result['harga'] ;
    echo"
    <tr>  		
      <td>$nama<input type='hidden' class='form-control' value='$nama'name='nama[]' readonly></td>
      <td><input type='text' class='form-control' value='$harga'name='harga[]' readonly></td>
      <td><input type='number' class='form-control' name='qty[]'></td>
    </tr>";}
	?>
</tbody>
</table>
	<div class="form-group">
		<center><button type="submit" class="btn btn-primary">Submit</button></center>
	</div>
	</form>
  </p>
      <footer class="footer">
        <p><center>&copy; Zona Accecories 2017</center></p>
      </footer>
    </div> <!-- /container -->   
  </body>
</html>