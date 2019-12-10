<?php
session_start();
require_once("connection.php");

     $logacc="Log In";
     @$userprofile=@$_SESSION['user_name'];

     if($userprofile==true){
         $query="SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
         $data=mysqli_query($con, $query);
         $result=mysqli_fetch_assoc($data);

		 $logacc=$result['firstname'];
         }
     else{
         header('location:login.php');
     }




?>
