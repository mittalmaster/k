<?php
require'includes/common.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Boothstrap/css/index.css" type="text/css">

    <title>Signup</title>
  </head>
  <body>
    <div>
      <?php
      include 'includes/header.php';
      ?>
<div class="container centre-div">

    <h1>SIGN UP</h1>
     <form>
       <div class="form-group">
         <label for="name" ></label>
         <input type="text" class="form-control" placeholder="Name">
         <label for="email" ></label>
         <input type="email" class="form-control" placeholder="Email">
         <label for="password" ></label>
         <input type="password" class="form-control"placeholder="Password">
         <label for="Contact" ></label>
         <input type="Contact" class="form-control"placeholder="Contact">
         <label for="city" ></label>
         <input type="text" class="form-control" placeholder="City">
         <label for="Address" ></label>
         <input type="text"  class="form-control"placeholder="Address">
</div>
     </form>
<input type="submit" class="btn btn-primary">
 </div>
</div>
<?php
   include 'includes/footer.php'
          ?>
  </body>
</html>
