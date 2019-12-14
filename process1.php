<?php
session_start();
require_once("connection.php");

     $logacc="Log In";
     @$userprofile=@$_SESSION['user_name'];

     if($userprofile==true){
         $query="SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
         $data=mysqli_query($con, $query);
         $result=mysqli_fetch_assoc($data);
         $myaccoundID = $result['myaccountID'];
         $logacc=$result['firstname'];
    }else{
         header('location:login.php');
     }

if(isset($_GET['token'])){
$token = $_GET['token'];
//update from cart
if($token =="update"){
 $id=$_GET['forIpinasa'];
 $quantity=$_GET['quantity'];

 $updatequery = "UPDATE carttbl SET quantity=quantity+'$quantity' WHERE ID = '$id'";
 $update=mysqli_query($con, $updatequery);

$sql="select total, quantity from carttbl where ID='$id' ";
$query=mysqli_query($con, $sql);
$toup=mysqli_fetch_array($query);
$total=$toup['total'];
$quantity=$toup['quantity'];
$newtotal=$total*$quantity;

$updatequery = "UPDATE carttbl SET total='$newtotal' WHERE ID = '$id'";
$update=mysqli_query($con, $updatequery);

  $pambato = array();
  $str="";

 if($update){

        $sql = "SELECT * FROM carttbl where ID = '$id'";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_assoc($result);

          $str=(0+$row['quantity']) ." Quantity";
          //$pambato['total']=$row['total'];
       
       
       $pambato['ucr']=$str;

       echo json_encode($pambato);
 }
}

if($token=='delete'){
    $id=$_GET['forIpinasa'];
    $sql = "DELETE FROM carttbl WHERE ID = '$id'";
    $delete=mysqli_query($con, $sql);
    if($delete){
        header("Refresh:1; url=cart.php");
    }
}

} //end if(isset($_GET['token']))

?>
