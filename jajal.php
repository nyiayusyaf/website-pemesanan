<?php 
include 'header.php';
?>

<body>
<div class="container">
<p><div class="alert alert-warning" role="alert">
<center>Form Order</center>
</div>
<form action='save-order-tg.php' method='post'>
<table class="table table-striped">
<tbody>
<tr>
<th scope="row">Nama</th>
<td></td>
<td></td>
<td><input type="text" class="form-control" name="nama" placeholder="Nama Anda" required></td>
</tr>
<tr>
<th scope="row">Telephone</th>
<td></td>
<td></td>
<td><input type="text" class="form-control" name="hp" placeholder="085XXXXXXXX" required></td>
</tr>
<tr>
<th scope="row">Alamat lengkap</th>
<td></td>
<td></td>
<td><textarea class="form-control" rows="3" name="alamat" placeholder="Alamat anda" required></textarea></td>
</tr>
<tr>
<th scope="row">Di Kirim Pada</th>
<td></td>
<td></td>
<td><input type="text" class="form-control" name="tgl" placeholder="yyyy/mm/dd" required></td>
<td><input type="text" class="form-control" name="jam" placeholder="hh:mm:ss" required></td>
</tr>

</tbody>
</table>
<br/><br/>
<div class='alert alert-info' role='alert'>
<center>Daftar item yang dipesan</center>
</div>
<table class="table table-striped">
<thead>
<h3>Menu Makan Siang</h3>
<tr>
<th>Gambar</th>
<th>Type</th>
<th>Harga</th>
<th>Qty</th>
</tr>
</thead>
<tbody>
<?php
include"koneksi.php";
$tampilkan = mysql_query("select gambar,nama,harga from produk ORDER BY nama");
while($select_result = mysql_fetch_array($tampilkan)){
$gambar= $select_result['gambar'];
$tipe = $select_result['nama'] ;
$harga = $select_result['harga'] ;
echo"
<tr>
<td><img height='50' width='50' src='adminlte/pict/$gambar'></td>
<td>$tipe<input type='hidden' class='form-control' value='$tipe'name='tipe[]' readonly></td>
<td><input type='text' class='form-control' value='$harga'name='harga[]' readonly></td>
<td><input type='number' class='form-control' name='qty[]'></td>
</tr>";}
?>
</tbody>
</table>
<table class="table table-striped">
<thead>
<h3>Menu Snack</h3>
<tr>
<th>Gambar</th>
<th>Type</th>
<th>Harga</th>
<th>Qty</th>
</tr>
</thead>
<tbody>
<?php
include"koneksi.php";
$tampilkan = mysql_query("select gambar,nama,harga from snack ORDER BY nama");
while($select_result = mysql_fetch_array($tampilkan)){
$gambar= $select_result['gambar'];
$tipe = $select_result['nama'] ;
$harga = $select_result['harga'] ;
echo"
<tr>
<td><img height='50' width='50' src='adminlte/pict/$gambar'></td>
<td>$tipe<input type='hidden' class='form-control' value='$tipe'name='tipe[]' readonly></td>
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
 <?php include 'footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })</script>
    <script src="includes/jquery.min.js"></script>
        <script src="includes/jquery.maskedinput.js"></script>
        <script>
        jQuery(function($){
            $("#tgl").mask("9999/99/99",{placeholder:"yyyy/mm/dd"});
        });
        </script>
  </body>
</html>

