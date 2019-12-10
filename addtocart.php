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
         }
     else{
         header('location:login.php');
     }
     $token = $_GET['token'];
     //add to cart
     if($token =="addtocart"){
     	$id=$_GET['forIpinasa'];
      $query = "SELECT * FROM productstbl where pid = '$id'";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);

      $pambato = array();

      $sp = $row['sellingprice'];
      $qty = 1;
      $total = $sp*$qty;
      $productID = $row['productID'];

      $insertquery = "INSERT INTO carttbl(myaccountID, productID, sellingprice, quantity, total)
      VALUES ('$myaccoundID', '$productID', '$sp', '$qty', '$total')";
      $insert=mysqli_query($con, $insertquery);
      if($insert){

            $sql = "SELECT * FROM carttbl inner join productstbl on carttbl.productID = productstbl.productID where myaccountID = '$myaccoundID'";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {

              $pambato['product'].='<div class="product-widget">
              <div class="product-img">
                <img src="'. $row['image'] .'" alt="">
              </div>
              <div class="product-body">
                <h3 class="product-name"><a href="#">'. $row['productname'] .'</a></h3>
                <h4 class="product-price"><span class="qty"> '. $row['quantity'] .'x </span> ₱  '.$row['total'].'  </h4>
              </div>
              <button onclick="deleteoncart('.$row['ID'].')" class="delete"><i class="fa fa-close"></i></button>
            </div>';
           }
        }

            $sql = "SELECT sum(quantity) as 'qty', sum(total) as 'total' FROM carttbl where myaccountID = '$myaccoundID'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $qty = 0;
            $pambato['quantity']=$row['qty'];
            $pambato['subtotal']="<h5>Subtotal: " .$row['total'] ."</h5>";
            $pambato['si']="<small>Item(s) selected: " .$row['qty'] ."</small>";
            echo json_encode($pambato);
      }
}

//delete on cart
//delete from cart
if($token =="delete"){
 $id=$_GET['forIpinasa'];
 $deletequery = "DELETE FROM carttbl WHERE ID = '$id'";
 $delete=mysqli_query($con, $deletequery);
 if($delete){

       $sql = "SELECT * FROM carttbl inner join productstbl on carttbl.productID = productstbl.productID where myaccountID = '$myaccoundID'";
       $result = mysqli_query($con, $sql);

       if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {

         $pambato['product'].='<div class="product-widget">
         <div class="product-img">
           <img src="'. $row['image'] .'" alt="">
         </div>
         <div class="product-body">
           <h3 class="product-name"><a href="#">'. $row['productname'] .'</a></h3>
           <h4 class="product-price"><span class="qty"> '. $row['quantity'] .'x </span> ₱  '.$row['total'].'  </h4>
         </div>
         <button onclick="deleteoncart('.$row['ID'].')" class="delete"><i class="fa fa-close"></i></button>
       </div>';
      }
   }

       $sql = "SELECT sum(quantity) as 'qty', sum(total) as 'total' FROM carttbl where myaccountID = '$myaccoundID'";
       $result = mysqli_query($con, $sql);
       $row = mysqli_fetch_assoc($result);
       $qty = 0;
       $pambato['quantity']=$qty+$row['qty'];
       $pambato['subtotal']="<h5>Subtotal: " .$row['total'] ."</h5>";
       $pambato['si']="<small>Item(s) selected: " .$row['qty'] ."</small>";
       echo json_encode($pambato);
 }
}
?>
