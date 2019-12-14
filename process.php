<?php 
session_start();
require_once("connection.php");

if(isset($_GET['token'])){
	$token = $_GET['token'];
     //Search from input
     if($token =="searchoninput"){
     	$tosearch=$_GET['tosearch'];
     	$pambato = array();
     	$str="";

     		//get count of results
     	      $sql1 = "SELECT count(pid) as 'count' FROM productstbl where productname LIKE '%$tosearch%' OR category LIKE '%$tosearch%' ";
              $result1 = mysqli_query($con, $sql1);
              $showing = mysqli_fetch_assoc($result1);

              $str.=' <div class="store-filter clearfix"><span class="store-qty">Showing ' .$showing['count'] .' products</span></div> 
                      <div class="row">';

            
            $sql = " SELECT * from productstbl where productname LIKE '%$tosearch%' OR category LIKE '%$tosearch%' ";
            $result = mysqli_query($con, $sql);

              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {

              $str.='<div class="col-md-4 col-xs-6">
						<div class="product">

							<div class="product-img">
								<img src="'.$row['image'].'" alt="productimage" height="224px">
							</div>

							<div class="product-body">
              <span style="color: red;"class = "fa fa-star"></span>
                      <span style="color: red;"class = "fa fa-star"></span>
                      <span style="color: red;"class = "fa fa-star"></span>
                      <span class = "far fa-star"></span>
                      <span class = "far fa-star"></span>
                      <span class = "">2.6</span>
								<p class="product-category">'.$row['category'].'</p>
								<h3 class="product-name"><a href="#">'.$row['productname'] .'</a></h3>
								<h4 class="product-price">'. $row['sellingprice'].'<del class="product-old-price"> '.$row['principalprice'].' </del></h4>
							</div>

							<div class="add-to-cart">
								<button class="add-to-cart-btn" onclick="addtocart('.$row['pid'].')"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
          </div>';
           } //end while($row = mysqli_fetch_assoc($result))
           $str.='</div><div class="store-filter clearfix"><span class="store-qty">Showing ' .$showing['count'] .' products</span></div>';
		   $pambato['product']=$str;
		   echo json_encode($pambato);
          }//end if (mysqli_num_rows($result) > 0)
          else{
          	$pambato['product']="No Product Found";
          	echo json_encode($pambato);
          } 
           
     }// end Search from input

     //Search from prize
     if($token =="searchbyprize"){
      $pricemax=$_GET['pricemax'];
      $pricemin=$_GET['pricemin'];
      $pambato = array();
      $str="";

        //get count of results
            $sql1 = "SELECT count(pid) as 'count' FROM productstbl where sellingprice >= '$pricemin' AND sellingprice <= '$pricemax' ";
              $result1 = mysqli_query($con, $sql1);
              $showing = mysqli_fetch_assoc($result1);

              $str.=' <div class="store-filter clearfix"><span class="store-qty">Showing ' .$showing['count'] .' products</span></div> 
                      <div class="row">';

            
            $sql = " SELECT * FROM productstbl where sellingprice >= '$pricemin' AND sellingprice <= '$pricemax' ";
            $result = mysqli_query($con, $sql);

              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {

              $str.='<div class="col-md-4 col-xs-6">
            <div class="product">

              <div class="product-img">
                <img src="'.$row['image'].'" alt="productimage" height="224px">
              </div>

              <div class="product-body">
                <span style="color: red;"class = "fa fa-star"></span>
                      <span style="color: red;"class = "fa fa-star"></span>
                      <span style="color: red;"class = "fa fa-star"></span>
                      <span class = "far fa-star"></span>
                      <span class = "far fa-star"></span>
                      <span class = "">2.6</span>
                <p class="product-category">'.$row['category'].'</p>
                <h3 class="product-name"><a href="#">'.$row['productname'] .'</a></h3>
                <h4 class="product-price">'. $row['sellingprice'].'<del class="product-old-price"> '.$row['principalprice'].' </del></h4>
              </div>

              <div class="add-to-cart">
                <button class="add-to-cart-btn" onclick="addtocart('.$row['pid'].')"><i class="fa fa-shopping-cart"></i> add to cart</button>
              </div>
            </div>
          </div>';
           } //end while($row = mysqli_fetch_assoc($result))
           $str.='</div><div class="store-filter clearfix"><span class="store-qty">Showing ' .$showing['count'] .' products</span></div>';
       $pambato['product']=$str;
       echo json_encode($pambato);
          }//end if (mysqli_num_rows($result) > 0)
          else{
            $pambato['product']="No Product Found";
            echo json_encode($pambato);
          } 
           
     }// end Search from prize


     //trackorder
     if(($token =="trackorder")){
      $tosearch=$_GET['tosearch'];

     }


     //end trackorder

}// end if(isset($_GET['token'])


?>