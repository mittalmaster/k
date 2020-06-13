<?php
include'includes/common.php';
if(isset($_SESSION['email']))
{
  header('location:product.php');
}
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
        <title>Home page</title>
    </head>
    <body>
    <!--  <?php
      /*include ("includes/header.php");*/
     ?>-->
      <div class="banner_image">
        <a href="product.html">  </a>

        <div class="container ">
          <centre>
          <div class="banner_content">
            <a href="product.html" text="ShopNow" class ="btn btn-danger btn-lg active"> ShopNow</a>
          </div>
        </centre>
          </div>

          </div>
          <?php
             include 'includes/footer.php';
                    ?>
    </body>
</html>
