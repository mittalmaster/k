<?php
include'includes/common.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Boothstrap/css/index.css" type="text/css">

    <title>Login page</title>
  </head>
  <body>
    <?php
    include 'includes/header.php';
    ?>
   <form method="post" action="login_submit.php">
    <div class="container centre-div ">
      <div class="row row-style">
        <div class="col-xs-6">
  <div class="panel-primary ">
    <div class="panel-heading">
    <h4>  Login</h4> </div>
      <div class="panel-body ">
    <div class="text-warning">
      <p> Login to make a purchase</p>
    </div>
    <form>
    <div class="form-group">
      <label for ="Email"></label>
      <input type="email" class="form-control"placeholder="Email-id" email="email">
      <label for ="Password"></label>
      <input type="password" class="form-control"placeholder="Password"Password="password">
     </div>

      <input type="submit" value="Login" class="btn btn-primary">
      </form>
        </div>
<div class="panel-footer">
  Did'nt have account ? <a href="#" >Register</a>
  </div>
</div>

</div>
</div>
</div>
</form>

<?php
   include 'includes/footer.php'
          ?>
</body>
</html>
