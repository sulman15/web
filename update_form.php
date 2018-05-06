<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Shopify');


$q="select * from product";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products Update</title>
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

    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Admin
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="Products.php">View</a>
    <a class="dropdown-item" href="insertion.php">Insert</a>
    <a class="dropdown-item" href="update_form.php">Admin View</a>
  </div>
</div>
    </nav>
      </div>


  </div>
</nav>



 <!-- UPDATE FORM -->
      <div class="mainf">
      <table width="80%" border="1" align="center">

    <td height="463" align="center" valign="top">
      <table width="100%" border="0">
      <h1>Products</h1>
        <tr>
        <td style="border-bottom:1px solid" width="10%"><strong>Product Id</strong></td>
        <td style="border-bottom:1px solid" width="10%"><strong>Product Name</strong></td>
        <td style="border-bottom:1px solid" width="20%"><strong>Price</strong></td>
         <td style="border-bottom:1px solid" width="10%"><strong>Product Image</strong></td> 
        </tr>
        

  <?php
          for($i=1;$i<=$num;$i++)
                     {
                         $row=mysqli_fetch_array($result);
                    ?>
                           <tr>
                            <td><?php echo $row['ID'] ?> </td>
                            <td><?php echo $row['product_name'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                             <td style="border-bottom:1px solid"><img src="uploads/<?php echo $row['picture'] ?>" height="50" width="50"  /></td> 
                            <td><a href="product_edit.php?pId=<?=$row["ID"]?>">Edit</a> | 
                      <a href="delete_product.php?pId=<?=$row["ID"]?>">Delete</a></td>
     
                            </tr>
                            
                    <?php 
                    }
                    ?>
      </table>
  </td>
  </tr>
</table>
</form>



<br><br><br><br>


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
  </body>
  </html>