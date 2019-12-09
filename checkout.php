<?php
session_start();
require_once("connection.php");

     $logacc="Log In";
     @$userprofile=@$_SESSION['user_name'];
     
     if($userprofile==true){
         $query="SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
         $data=mysqli_query($con, $query);
         $result=mysqli_fetch_assoc($data);
         
		 $logacc=$result['firstname'];
         }
     else{
         header('location:login.php');
     }
	 
	 


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

    </head>
	<body>
		<!-- Header Fold -->
		<!-- HEADER -->
		<header>
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
						<li><a href="#"><i class="glyphicon-peso"></i> ₱ PHP</a></li>
						<li><a href="account.php"><i class="fa fa-user-o"></i> <?php echo $logacc; ?></a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/AlexSteelSupplyLogoNew.png" alt="LOGO">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">B.I. & G.I. Pipes</option>
										<option value="2">B.I. & G.I. Tubulars</option>
										<option value="3">Channels</option>
										<option value="4">Flat & Angle Bars</option>
										<option value="5">Handles & Hinges</option>
										<option value="6">Mild Steel Plates</option>
										<option value="7">Plain & Deformed Bar</option>
										<option value="8">Plain G.I. Sheets</option>
										<option value="9">Roofing</option>
										<option value="10">Square & Section Bars</option>
										<option value="11">Welding Rod</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
								
								<!-- Wishlist -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty"> 2 </div>
									</a>
									
									<div class="cart-dropdown">
										
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty"> 1x </span> ₱ 980.00 </h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>₱ 980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product03.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">2x</span>₱ 980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										

										</div>
										
										<div class="cart-summary">
											<small>3 Item(s) on wishlist</small>
				
										</div>
										
										<div class="cart-btns">
											<a href="wishlist.php">View Wishlist</a>
											<a href="addtocart.php">Add to Cart  <i class="fa fa-shopping-cart"></i></a>
										</div>
									
									</div>
								</div>
								<!-- /Wishlist -->

						
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty"> 3 </div>
									</a>

									<div class="cart-dropdown">
										
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty"> 1x </span> ₱ 980.00 </h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>₱ 980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product03.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">2x</span>₱ 980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										

										</div>
										
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: ₱ 2940.00</h5>
										</div>
										
										<div class="cart-btns">
											<a href="cart.php">View Cart</a>
											<a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									
									</div>
								</div> 
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->

							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="product.php">Products</a></li>
						<li><a href="trackorder.php">Track My Order</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" value="Steven" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" value="Francisco" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" value="Steven123francisco@gmail.com" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" value="B1 Lot 31" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" value="Igay Sto. Cristo" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" value="San Jose Del Monte" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" value="Bulacan" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" value="Philippines" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" value="3023" style="font-size: 20px;" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" value="09057904098" style="font-size: 20px;" readonly>
							</div>
							
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Ship to a diffrent address?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Street">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Barangay">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="municipality">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Province">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
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
								<div class="order-col">
									<div>1x Product Name Goes Here</div>
									<div>₱ 980.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>₱ 980.00</div>
								</div>
							</div>
							
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">₱ 2940.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Cash-on-Delivery (COD)
								</label>
								<div class="caption">
									<p>shipping fee may vary due to the location.</p>
								</div>
							</div>
							
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" onclick="SendOrder()" class="primary-btn order-submit">Send Order Request</a>
						<script>
						function SendOrder()
						{
							alert("Sent Successfully! Order request is now processing. Please check notification order had successfully placed ");
						}
						</script>
					</div>
					<!-- /Order Details -->
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
