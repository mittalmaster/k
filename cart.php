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
        <title>Cart</title>
    </head>
    <body>
      <?php
      include 'includes/header.php';
      ?>
      <div class="container centre-div">

<table class="table table-borderd">

<tbody>
<tr>
<th>Iteam Number           </th>
<th>Iteam Name         </th>
<th> Price</th>
<th>     </th>
</tr>
<tr>
<th>          </th>
<th>        </th>
<th> </th>
<th>     </th>
</tr>
<tr>
<td></td>
<td>Total</td>
<td>Rs 0.00</td>
<td><a href="success.html"><input type="submit" class="btn btn-primary" value="confirm order"></a></td>
</tr>
</tbody>
</table>
</div>

<?php
   include 'includes/footer.php';
          ?>


</body>
</html>
