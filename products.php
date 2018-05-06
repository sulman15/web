<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'shopify');
$q="select * from product";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css.style2.css">
   <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/footer2.css">
  <style>
  
  </style>
</head>
<body>

<!---Navigation bar-->
<nav class="navbar navbar-inverse bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Shopify</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
	  <li><a href="products.php">Product</a></li>
	  <li><a href="#">About US</a></li>
	  <li><a href="#">Contact US</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Kurta</a></li>
          <li><a href="#">Casual</a></li>
          <li><a href="#">Party</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>



       <!-- Record -->
      <div class="mainf productr">
    <h1 style="text-align:center">Product Record</h1>
               <?php
                  for($i=1;$i<=$num;$i++)
                     {
                         $row=mysqli_fetch_array($result);
                     
                    ?>                   
                    <div class="right col-md-4 prod">
                    <a href="products2.php?pid=<?=$row["ID"]?>" style="color:#1F2124;" ><img src="uploads/<?php echo $row['picture'] ?>" class="col-md-12">
                    <div class="linkp col-md-12" style="text-align:center"><?php echo $row['product_name'] ?></div></a>
                    </div>
              <?php } ?>
        </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<!-- Record -->
<section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      
    </div>
  </section>

  </body>
  </html>
  