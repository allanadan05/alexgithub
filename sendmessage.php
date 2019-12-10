<?php 
include('connection.php');



$palatandaan =  $_GET['palatandaan'];
if($palatandaan =="sendmessage"){
        $date=$_POST['date'];
        $msgfrom=$_POST['msgfrom'];
        $msgto=$_POST['msgto'];
        $msghere=$_POST['msghere'];

        $sql="INSERT INTO messagingtbl(date,msgfrommyaccountID,msgtomyaccountID,messagetext) VALUES ('$date','$msgfrom','$msgto','$msghere')";
        if(mysqli_query($con,$sql))
	    {
	        header("location: admincustomer.php");
	    }
	    else
	    {
	        echo " SIGN UP FAILED ";
	    }
        
    


}
















?>