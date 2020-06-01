<?php include 'header.php';
?>
  <body>
    <?php include 'navbar.php';?>
    <h2 class="text">Cemilan</h2>
  <div class="container white shadow" >
  <p> Pemesanan makanan minimal 30 pcs, jika pesanan diatas 50 pcs gratis ongkos kirim. Pesanan anda akan tiba 15 menit sebelum makan siang.</p><hr class="featurette-divider">
    <form method="post" action="bill.php">
    <div class="container">
    <div class="row">
      <?php 
        include('koneksi.php');
        $query = mysql_query("SELECT*FROM snack") or die(mysql_error());
          if($no=1){
            while($data =mysql_fetch_assoc($query)){?>
      <div class="col" style="padding: 10px">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" height="200px" src="adminlte/pict/<?php echo $data['gambar'];?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data['nama']; ?></h5>
            <p class="card-text"><?php echo substr($data['deskripsi'],0,150); ?> ...</p>
            <h6 class="card-title" name="harga">Rp. <?php echo $data['harga']; ?></h6>
            <a href="login.php?=id<?php echo $data['id'] ?>" class="btn btn-primary" name="button" value="submit">Pesan</a>
          </div>
        </div>
      </div>
      <?php
       $no++; 
        }
      }
      ?>
    </div>
    </form>
    </div>
    <?php include 'footer.php';?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>