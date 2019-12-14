<?php 
include('connection.php');


if(isset($_POST['sendfeedback'])){
	$feedbackmessage= $_POST['feedback'];
    $sendpid= $_POST['sendfeedback'];	
    $noofstar= $_POST['star-no'];
    $ratefrom=$_POST['accountid'];	


    $q="INSERT INTO feedbacktbl(pid,stars,reviewmessage,accountid) VALUES ('$sendpid','$noofstar','$feedbackmessage', '$ratefrom')";
    $insert = mysqli_query($con,$q);
    if($insert){
        header("location: product.php");
    }else{
        header("location: product.php");
        }

}
?>