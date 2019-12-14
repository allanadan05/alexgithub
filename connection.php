<?php
   $con=mysqli_connect("db5000247935.hosting-data.io", "dbu129539", "@Accessgreengarden6");
   mysqli_select_db($con, "dbs242190");

    if ($con) {
 	echo "";
     }
    else{
 	die ("Connection failed because " .mysqli_connect_error());
 }

?>
