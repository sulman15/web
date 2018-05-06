<?php

 $con=new mysqli('localhost','root','','shopify');

                  $index=$_GET['pId'];
                $q="Delete from product where pid=$index";
                
                 $status=mysqli_query($con,$q);  
      if($status==1)
         {
             header('location:http://localhost/project/products.php');
             }
              else
              {
                echo "Record not deleted";
            
         }
     mysqli_close($con);
?>