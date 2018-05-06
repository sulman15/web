<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Shopify');

$q="select * from product where ID=$index";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
      
    if ($num > 0) 
    {
      $row = mysqli_fetch_array($result);
    } 
  
mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Product</title>
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

<!-- Navigation bar -->
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




 <!-- form -->
<div class="mainf">
  <form name="myform" action="editp.php" method="post"  enctype="multipart/form-data">
  <input type="hidden" name="hdpicture" value="<?=$row["picture"]?>" />
  <input type="hidden" name="hdpageId" value="<?=$row["ID"]?>" />
  <table width="80%" border="0">
 

   <tr>
    <td height="34" colspan="2"><strong>Edit product Record</strong></td>
  </tr>

  <tr>
    <td>Product Name</td>
    <td><input type="text" name="pname" value="<?=$row["product_name"]?>" /></td>
    
  </tr>
   <tr>
    <td>Product ID</td>
    <td><input type="number" name="pid" value="<?=$row["ID"]?>" /></td>
  </tr>
    <td>Price</td>
    <td><input type="number" name="price" value="<?=$row["price"]?>" /></td>
  </tr>
   <tr>
    <td valign="top">Product Description</td>
    <td valign="top"><textarea name="pdes"><?=$row["description"]?></textarea></td>
  </tr>
   <tr>
  
     <td valign="top">Picture</td>
    <td valign="top"><input type="file"  name="picture" required /></td>
   </tr>
   
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Edit Page" /></td>
  </tr>
</table>
</form>
  
  </td>
  </tr>
</table>
</div>




<!-- Footer -->
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