<?php
     session_start();
     include 'connection.php';
if(isset($_GET['palatandaan']))
{
	$palatandaan=$_GET['palatandaan'];

	if($palatandaan=$_GET['statusdeliv'])
	
	$delstat=$_GET['delstat'];
	$bval=$_GET['bval'];
	echo $bval;
	
	$sql ="update  deliverytbl set status='$bval' where deliveryid='$delstat'";
	$exe = mysqli_query($con,$sql);

	if($exe){

	}

	
}

?>