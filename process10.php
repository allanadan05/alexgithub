 <?php 
include('connection.php');
     $accesscode = $_POST['accesscode'];
     $cartid = $_POST['cartid'];
     $myaccountid = $_POST['myaccountid'];
     $date = date("Y/m/d");
    $sql = "INSERT INTO salestbl(accesscode, cartid)
    SELECT ID, cartid from carttbl where myaccountID='$myaccoundID'";
    $execute = mysqli_query($con,$sql);
    if($execute){
      header("location : checkout.php");
    }else{
      echo "Failed";
    }

  ?>    


