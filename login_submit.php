<?php
include'includes/common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$user_query="select id, email from ecommerce.user where $email='email'" or
die(mysqli_error($con));
$query_result=mysqli_query($con,$user_query) or die(mysqli_error($con));
if(mysqli_num_rows($query_result)==0)
{

}
else{

  $row=mysqli_fetch_array($query_result);
  $_SESSION['email']=$email;
  $_SESSION['user_id']=$user_id;
  header(location:'product.php');
}



 ?>
