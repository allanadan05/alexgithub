<?php 
include('connection.php');


if(isset($_GET['palatandaan'])){
$palatandaan =  $_GET['palatandaan'];
if($palatandaan =="sendmessage"){
        $date=date("d/m/Y");
        $msgfrom=$_GET['messagefrom'];
        $msgto=$_GET['messageto'];
        $msghere=$_GET['messagehere'];

        $sql="INSERT INTO messagingtbl(messagedate,msgfromaccountid,msgtoaccountid,messagetext) VALUES ( SYSDATE(),'$msgfrom','$msgto','$msghere')";
        $res2=mysqli_query($con,$sql);
        if($res2)
	    {
           echo "<div class='alert alert-success'>Message sent</div>";
	    }
	    else
	    {
            echo "<div class='alert alert-danger'>Message cannot be sent</div>";
	    }
        
    

    }
}
















?>