<?php

 $con=mysqli_connect('localhost','root','','shopify');

 $pname=$_POST['pname'];
 $pid=$_POST['pid'];
 $price=$_POST['price'];
 $pdes=$_POST['pdes'];
    $pictur= $_FILES['pi']["name"]; 
    move_uploaded_file($_FILES['pi']['tmp_name'], 'uploads/'.$pictur);

           

 $q="Insert into product (product_name,id,price,description,picture) 
 Values ('$pname','$pid','$price','$pdes','$pictur')";
   $status= mysqli_query($con,$q);
    if($status==1)
         {
             header('location:http://localhost/project/products.php');
             }
              else
              {
                 header('location:http://localhost/Final/insertion2.php');
         }
    mysqli_close($con);
  
  
?>

 