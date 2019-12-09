<?php
   $con=mysqli_connect("localhost", "root", "");
   mysqli_select_db($con, "alexsteeldb");

    if ($con) {
 	echo "";
     }
    else{
 	die ("Connection failed because " .mysqli_connect_error());
 }
 
?>
