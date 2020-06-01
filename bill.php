<?php 
include 'header.php';
?>
  <body>
    
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>

      <div class="row">
        
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" method="post" action="proses-bill.php" novalidate>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Nama Anda" name="nama" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Telephone</label>
              <input type="text" class="form-control" id="telephone" placeholder="085XXXXXXXX" name="telepon" required>
              <div class="invalid-feedback">
                Please enter your telephone.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Jakarta, XX XXX X" name="alamat" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
              <div class="row">
             <div class="col-md-12 mb-3">
              <div class="row">
                <div class="col-4">
                  <label for="state">Quantity</label>
                  <select class="custom-select d-block w-100" id="Min 3 Box" name="qty" required>
                    <option value="form-control">Choose...</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                    <option>35</option>
                    <option>40</option>
                    <option>45</option>
                    <option>50</option>
                  </select>
                </div>
                <div class="col">
                  <label>Kota</label>
                  <select class="custom-select d-block w-100" id="Min 3 Box" name="kota" required>
                    <option value="form-control">Choose...</option>
                    <option>Jakarta</option>
                    <option>Bogor</option>
                    <option>Depok</option>
                    <option>Tanggerang</option>
                  </select> 
                </div>
              </div>
              </div>
            </div>

              <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Delivery Date</label>

                <div class="input-group">
                  <input name="tgl" id="tgl" class="form-control" placeholder="yyyy/mm/dd" required> 
              </div>
              <div class="invalid-feedback">
                Please enter your delivery Date.
              </div>
            </div>

            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Continue to checkout</button>
            <a class="btn btn-warning btn-lg btn-block" href="bill.php">Clear the order</a>
          </form>
        </div>
      </div>
    </div>
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
