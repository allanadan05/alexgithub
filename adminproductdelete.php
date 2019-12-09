

<?php
require_once('connection.php');

$pID=$_GET['productID'];

if(mysqli_query($con, "DELETE FROM `productstbl` WHERE `productID`=$pID  ")){
   header("location: adminproduct.php?productsmsgsuccess= Deleted Successfully! "); 
}else{
   header("location: adminproduct.php?productsmsgerr= Unable to Delete. "); 
}



?>


