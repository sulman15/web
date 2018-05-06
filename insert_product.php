<?php
  // 1. create a database connection
  $connection = mysqli_connect("localhost","root","","Shopify");
  if(!$connection){
    die("database connection failed" . mysqli_error());
  }
?> 



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Products</title>
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

<!----------Navigation bar-------->
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





<!-------------- Insert Product ------------>

<div class="col-md-12 mainf signup inserttab">
        <h2>Insertion Form</h2>
<form action="insertion.php" method="post" enctype="multipart/form-data">
    <fieldset class="col-md-4 left">
        <legend>Insert Data Here!</legend>
        <input type="text" placeholder="Product Name" name="pname" required><br><br>
        <input type="number" placeholder="Product ID" name="pid" required><br><br>
        <input type="number" placeholder="Price:xxxx/-" name="price" required><br><br>
        <textarea placeholder="Product Description" name="pdes" required></textarea><br><br>
        <input type="file" name="pi" id="files" required>
        <input type="submit" class="btn btn-primary btno" value="Insert Product" />
        </fieldset>
</form>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





<!--Footer -->
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
  <!-- Footer -->
  </body>
  </html>