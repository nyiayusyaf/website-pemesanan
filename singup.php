<?php include 'header.php';?>
<body>
    <?php include 'navbar.php';?>
  <form class="form-signin" action="proses-signup.php" method="post">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal"><b>Please Sign Up!</b></h1>
      <div class="form-label-group">
        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
        <label for="name">Name</label>
      </div>
       <div class="form-label-group">
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
        <label for="username">Username</label>
      </div>
      <div class="form-label-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
        <label for="email">Email address</label>
      </div>
      <div class="form-label-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
    </div>
      <button class="btn btn-primary" type="submit" name="submit"><a href="proses-signup.php"></a>Submit</button>
  </form>
  </div>
</div>

</body>
<?php include 'footer.php'; ?>
</html>
