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


$profile=$_SESSION['userid'];
   $sessionmyaccountID=$_SESSION['myaccountID'];


   $ssqqll="SELECT * FROM myaccounttbl WHERE accountid='$profile' ";
   $ququery=mysqli_query($con, $ssqqll);
   $resultrow=mysqli_fetch_array($ququery);
    //print_r($resultrow['email']);



?>

<!DOCTYPE html>
<html lang="en">
<!-- Head folded -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title> Home - Alex Steel Supply</title>
  <link rel="icon" href="./img/AlexSteelSupplyLogotitlebar.png" type="image">

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

  <!-- Custom Bootstrap -->
  <link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css"/>

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css"/>
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css"/>

        <!-- Custom stlylesheet
        <link type="text/css" rel="stylesheet" href="css/stevenstyle.css"/>
      -->

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="function1.js"></script>

      </head>
      <body>
        
      <!-- TOP HEADER -->
      <div id="top-header">
        <div class="container">
          <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i> 0920-960-0849  </a></li>
            <li><a href="#"><i class="fa fa-phone"></i> 0995-954-1926  </a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> alexsteelsupply@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> Quirino Highway, Brgy. Kaypian, San Jose Del Monte City, Bulacan</a></li>
          </ul>
          <ul class="header-links pull-right">
            <li><a href="#"><i class="glyphicon-peso">₱</i> PHP</a></li>
            <li><a href="account.php"><i class="fa fa-user-o"></i> <?php echo $logacc; ?></a></li>
          </ul>
        </div>
      </div>
      <!-- /TOP HEADER -->            


    <!-- NAVIGATION -->
    <nav id="navigation">
      <!-- container -->
      <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
          <!-- NAV -->

          <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="./img/AlexSteelSupplyLogoNew.png" alt="LOGO" height="50px;">
                </a>
              </div>
            </div>
            <!-- /LOGO -->

          <ul class="main-nav nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="feed.php">Feed</a></li>
            <li><a href="trackorder.php">Track My Order</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li class="active"><a href="feed.php">Cart</a></li>

          </ul>
          <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <?php //include("issets.php"); ?>


        <!-- SECTION -->
        <div class="section">

         <!-- container -->
         <div class="container">

          <!-- row -->
          <div class="row">

            <!-- Product panel-->

            <div>
              <h2 style="color: #ff3300; text-align: center;">My Cart</h2><hr>
            </div>

            <div class="panel panel-default ">

              <!--panel body-->
              
              <!-- wishlistbody -->
              <div class="wishlistbody">
                <?php
                $sql = "SELECT * FROM carttbl inner join productstbl on carttbl.pid = productstbl.pid where myaccountID = '$myaccoundID'";
                $result = mysqli_query($con, $sql);
                $count=1;
                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div id="response" class="row">

                    <!-- Product details -->
                    <div class="col-md-4 col-md-push-2">

                     <div class="product-details">
                      <h2 class="product-name"><?php echo $row['productname'] ?></h2>

                      <div>
                       <h3 class="product-price">₱ <?php echo $row['sellingprice'] ?> <del class="product-old-price">₱ <?php echo $row['principalprice'] ?></del></h3><q></q>
                       <span id="updatecartresponse<?php echo ++$count; ?>" class="product-available"><?php echo 0+$row['quantity'] ?> Quantity</span>
                     </div>
                     <p>Available in <?php echo $row['availablein'] ?></p>
                     <p><?php echo $row['additionalinfo'] ?></p>



                     <div class="add-to-cart">
                       <div class="qty-label">
                        Qty
                        <div class="input-number">
                         <input type="number" id="quantity<?php echo $count; ?>" value="1">
                         <span class="qty-up">+</span>
                         <span class="qty-down">-</span>
                       </div>
                     </div>
                     <div>
                     <center><button onclick="updateoncart(<?php echo $row['ID'] .",". $count ?>)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Update Cart </button>
                     <button onclick="deleteonviewcart(<?php echo $row['ID'] .",". $count ?>)" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Delete Cart </button></center>
                   </div>
                   </div>

                 </div>

               </div>
               <!-- /Product details -->

               <!-- Product thumb imgs -->
               <div class="col-md-2  col-md-pull-4">

                <div id="product-imgs">
                  <div class="product-preview">
                   <img src="<?php echo $row['image'] ?>" alt="">
                 </div>
               </div>
                  
             </div>
             <!-- /Product thumb imgs -->

             <!-- Product tab -->
             <div class="col-md-5">

               <div class="col-md-12">
                <div id="product-tab">

                 <!-- product tab nav -->
                 <ul class="tab-nav">
                  <li class="active"><a data-toggle="tab" href="#tab1<?php echo $row['ID'] ?>">Description</a></li>
                  <li><a data-toggle="tab" href="#tab2<?php echo $row['ID'] ?>">Details</a></li>
                </ul>
                <!-- /product tab nav -->

                <!-- product tab content -->
                <div class="tab-content">
                  <!-- tab1  -->
                  <div id="tab1<?php echo $row['ID'] ?>" class="tab-pane fade in active">
                   <div class="row">
                    <div class="col-md-12">
                     <p><?php echo $row['description'] ?>.</p>
                   </div>
                 </div>
               </div>
               <!-- /tab1  -->

               <!-- tab2  -->
               <div id="tab2<?php echo $row['ID'] ?>" class="tab-pane fade in">
                 <div class="row">
                  <div class="col-md-12">
                   <p><?php echo $row['details'] ?>.</p>
                 </div>
               </div>
             </div>
             <!-- /tab2  -->

           </div>
           <!-- /product tab content  -->
         </div>
       </div>

     </div>
     <!-- /product tab -->

   </div>
 <?php }
} ?>
</div>
<!-- /wishlistbody -->



</div>
<!--/panel body-->


</div>
<!--panel /default-->


<!-- Order Details -->
<div class="row">
          <div class="col-md-5 order-details">
            <div class="section-title text-center">
              <h3 class="title">Your Order</h3>
            </div>
            <div class="order-summary">
              <div class="order-col">
                <div><strong>PRODUCT</strong></div>
                <div><strong>TOTAL</strong></div>
              </div>
              <div class="order-products">
                <?php
                   $sql="select sum(total) as carttotal from carttbl where myaccountID='$sessionmyaccountID' ";
                   $query=mysqli_query($con, $sql);
                   $total=mysqli_fetch_array($query);

                   $sql="select ID, myaccountID, (select productname from productstbl where pid=carttbl.pid) as productname, sellingprice, quantity, total from carttbl where myaccountID='$sessionmyaccountID' ";
                   $query=mysqli_query($con, $sql);

                   while ($row=mysqli_fetch_array($query)) {
                    
                ?>
                <div class="order-col">
                  <div><?php echo $row['quantity'] ."x " .$row['productname']; ?></div>
                  <div>₱ <?php echo " ". $row['total']; ?>.00</div>
                </div>
                <?php } ?>
              </div>
              
              <div class="order-col">
                <div><strong>TOTAL</strong></div>
                <div><strong class="order-total">₱ <?php echo " ". $total['carttotal']; ?>.00</strong></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
      <div class="cart-btns">
        <button class="btn btn-info" style="height: 50px; width: auto; color: white ;  "><a href="checkout.php">Proceed to Checkout  <i class="fa fa-arrow-circle-right"></i></a></button>
      </div>
</div>


</div>
<!--/container-->

</div>
<!--/product panel-->






    </div>

  </div>

</div>
</div>















</div>
<!-- /row -->

</div>
<!-- /container -->
</div>
<!-- /SECTION -->


<!-- NEWSLETTER -->
<div id="newsletter" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <div class="newsletter">
          <p>Follow Us in <strong>Social Media</strong></p>

          <ul class="newsletter-follow">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-envelope-o"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /NEWSLETTER -->

<!-- FOOTER -->
<footer id="footer">
  <!-- top footer -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-3 col-xs-6">
          <div class="footer">
            <h3 class="footer-title">About Us</h3>

            <ul class="footer-links">
              <li><a href="#"><i class="fa fa-phone"></i> 0920-960-0849  </a></li>
              <li><a href="#"><i class="fa fa-phone"></i> 0995-954-1926  </a></li>
              <li><a href="#"><i class="fa fa-envelope-o"></i> alexsteelsupply@gmail.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i> Quirino Highway, Brgy. Kaypian, San Jose Del Monte City, Bulacan</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="footer">
            <h3 class="footer-title">Categories</h3>
            <ul class="footer-links">
              <li><a href="#">B.I. & G.I. Pipes</a></li>
              <li><a href="#">B.I. & G.I. Tubulars</a></li>
              <li><a href="#">Flat & Angle Bars</a></li>
              <li><a href="#">Handles & Hinges</a></li>
              <li><a href="#">Mild Steel Plates</a></li>
              <li><a href="#">Plain & Deformed Bar</a></li>
              <li><a href="#">Plain G.I. Sheets</a></li>
              <li><a href="#">Roofing</a></li>
              <li><a href="#">Square & Section Bars</a></li>
              <li><a href="#">Welding Rod</a></li>
            </ul>
          </div>
        </div>

        <div class="clearfix visible-xs"></div>

        <div class="col-md-3 col-xs-6">
          <div class="footer">
            <h3 class="footer-title">Information</h3>
            <ul class="footer-links">
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="privacy.php">Privacy Policy</a></li>
              <li><a href="orderreturn.php">Orders and Returns</a></li>
              <li><a href="terms.php">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="footer">
            <h3 class="footer-title">Service</h3>
            <ul class="footer-links">
              <li><a href="account.php">My Account</a></li>
              <li><a href="cart.php">View Cart</a></li>
              <li><a href="wishlist.php">Wishlist</a></li>
              <li><a href="trackorder.php">Track My Order</a></li>
              <li><a href="help.php">Help</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /top footer -->

  <!-- bottom footer -->
  <div id="bottom-footer" class="section">
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="footer-payments">
            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
          </ul>
          <span class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Modified for Alex Steel Supply - Dan -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Alex Steel Supply
          </span>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
