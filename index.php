<?php include 'header.php';

?>
  <body>
    <?php include 'navbar.php';?>

     <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/catering_banner.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Log In</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="image/lunch_box.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-primary" href="menu1.html" role="button">Lihat Menu>></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="image/Snack.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <p><a class="btn btn-lg btn-primary" href="snack.php" role="button">Lihat Menu>></a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/delivery_icon.png" alt="Generic placeholder image" width="140" height="140">
            <h2>On Time Delivery</h2>
            <p>On time delivery is our strong commitment. Supported by our professional</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/menu_icon.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Best Menu</h2>
            <p>On time delivery is our strong commitment. Supported by our professional</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/meal_icon.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Easy Meal</h2>
            <p>On time delivery is our strong commitment. Supported by our professional</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <?php include 'footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>