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
        <title>Setting</title>
    </head>
    <body>
      <?php
      include 'includes/header.php';
      ?>
<div class="container centre-div">
  <form method="$_POST" action="change.php">
    <div class="form-group">
<h2>Change Password</h2>
<label for="password"></label>
<input type="text"class="form-control" id="old_password"placeholder="old password">
<label for="password"></label>
<input type="text" class="form-control" id ="new_password1"placeholder="new password">
<label for="password"></label>
<input type="text" class="form-control" id="new_password2"placeholder="repeat new password">

</div>
</form>
<input type="submit" class="btn btn-primary" value="Change">
</div>
<?php
   include 'includes/footer.php'
          ?>




</body>
</html>
