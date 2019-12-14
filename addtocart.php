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
     //add to cart
     if($token =="addtocart"){
      $id=$_GET['forIpinasa'];
      $query = "SELECT * FROM productstbl where pid='$id'";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_array($result);

      $sp = $row['sellingprice'];
      $qty = 1;
      $total = $sp*$qty;
      $productID = $row['pid'];

      if($row){

      //Increment quantity if product found in user's cart
      $ask="select * from carttbl where pid='$productID' AND myaccountID='$myaccoundID' ";  
      $askexecute=mysqli_query($con, $ask);
      $fetch=mysqli_fetch_array($askexecute);
      if($fetch){
        $incQty=($fetch['quantity']+1);

        //update the quantity to carttbl 
        $toquery = "UPDATE carttbl SET quantity='$incQty' WHERE pid='$productID' AND myaccountID='$myaccoundID' ";

      }else{
        //Insert to cart if product didnt exist 
        $toquery = "INSERT INTO carttbl(myaccountID, pid, sellingprice, quantity, total)
        VALUES ('$myaccoundID', '$productID', '$sp', '$qty', '$total')";
      }

      //execute query after knowing what operation should be made
      $execute=mysqli_query($con, $toquery);


      if($execute){
            //show
            $pambato = array();
            $str="";
            $sql = "SELECT * FROM carttbl inner join productstbl on carttbl.pid = productstbl.pid where myaccountID = '$myaccoundID'";
            $result = mysqli_query($con, $sql);

              while($row = mysqli_fetch_assoc($result)) {

              $str.='<div class="product-widget">
              <div class="product-img">
                <img src="'. $row['image'] .'" alt="">
              </div>
              <div class="product-body">
                <h3 class="product-name"><a href="#">'. $row['productname'] .'</a></h3>
                <h4 class="product-price"><span class="qty"> '. $row['quantity'] .'x </span> ₱  '.$row['total'].'  </h4>
              </div>
              <button onclick="deleteoncart('.$row['ID'].')" class="delete"><i class="fa fa-close"></i></button>
            </div>';
           } //end while($row = mysqli_fetch_assoc($result))
           $pambato['product']=$str;


            $sql = "SELECT count(pid) as 'items', sum(sellingprice * quantity) as 'total' FROM carttbl where myaccountID ='$myaccoundID'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $qty = 0;
            $pambato['quantity']=($row['items']+0);
            $pambato['subtotal']="<h5>SUBTOTAL: ₱ " .($row['total']+0) ."</h5>";
            $pambato['si']=($row['items']+0) ." Item(s) selected";

            echo json_encode($pambato);
      }// end  if($execute)
       
}// end  if($row)
} // end if($token =="addtocart")



//delete on cart
//delete from cart
if($token =="delete"){
 $id=$_GET['forIpinasa'];
 $deletequery = "DELETE FROM carttbl WHERE ID = '$id'";
 $delete=mysqli_query($con, $deletequery);

  $pambato = array();
  $str="";

 if($delete){

     $sql = "SELECT * FROM carttbl inner join productstbl on carttbl.pid = productstbl.pid where myaccountID = '$myaccoundID'";
        $result = mysqli_query($con, $sql);

          while($row = mysqli_fetch_assoc($result)) {

          $str.='<div class="product-widget">
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
       $pambato['product']=$str;

        $sql = "SELECT count(pid) as 'items', sum(sellingprice * quantity) as 'total' FROM carttbl where myaccountID ='$myaccoundID'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $qty = 0;
            $pambato['quantity']=($row['items']+0);
            $pambato['subtotal']="<h5>SUBTOTAL: ₱ " .($row['total']+0) ."</h5>";
            $pambato['si']=($row['items']+0) ." Item(s) selected";

       echo json_encode($pambato);
 }
} // end delete cart


} //end if(isset($_GET['token']))

?>
