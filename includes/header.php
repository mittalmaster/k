<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-Header">
    <button type="button" class="navbar-toggle"
    data-toggle="collapse" data-target="#mynavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>


    <a href="index.php" class="navbar-brand"  >Lifestyle Store</a>
  </div>
  <div class="collapse navbar-collapse " id="mynavbar">
    <ul class="nav navbar-nav navbar-right">
<?php
if(isset($_SESSION['email']))
{?>
    <li>  <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span> </a></li>
    <li>   <a href="setting.php"> <span class="glyphicon  glyphicon-user">Setting</span></a></li>
    <li> <a hreg="logout_script.php" ><span class="glyphicon glyphicon-log-out">Logout</span></a></li>

<?php}
else { ?>
  <li>  <a href="signup.php"><span class="glyphicon glyphicon-user">Signup</span></a></li>
  <li>   <a href="login.php" ><span class="glyphicon glyphicon-log-out">Login</span></a></li>

  <?php}

  ?>
</ul>
</div>
</nav>
