<?php
session_start();
require_once("connection.php");
     $logacc="Log In";
     @$userprofile=@$_SESSION['user_name'];

     $ASK=" SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
     $INFO=mysqli_query($con, $ASK);
     $result=mysqli_fetch_assoc($INFO);
     
     if($userprofile==true){
        
        $logacc=$result['firstname'];
     }

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Home - Alex Steel Supply</title>
		<link rel="icon" href="./img/AlexSteelSupplyLogotitlebar.png" type="image">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
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
						<li><a href="#"><i class="glyphicon-peso">₱</i> PHP</a></li>
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
								<a href="#" class="logo">
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
									<input class="input" placeholder="Search here" autofocus>
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

										<?php
										   $b=1;
										   for($b=1; $b<=5; $b++) {
										?>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty"> 1x </span> ₱ 980.00 </h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

										<?php
										   }
										 ?>
											
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

										<?php
										   $a=1;
										   for($a=1; $a<=5; $a++) {
										?>
										  	
										  
												<div class="product-widget">
													<div class="product-img">
														<img src="./img/product01.jpg" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-name"><a href="#"> <?php echo'Product Name'; ?> </a></h3>
														<h4 class="product-price"><span class="qty"> 1x </span> ₱ 980.00 </h4>
													</div>
													<button class="delete"><i class="fa fa-close"></i></button>
												</div>
										<?php 

										  }

										?>


										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: ₱ 2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="cart.php">View Cart</a>
											<a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="feed.php">Feed</a></li>
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

		<?php //include("issets.php"); ?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

								<?php  
								   $categories=array("B.I. & G.I Pipes", "B.I. & G.I. Tubulars", "Flat & Angle Bars", "Handles & Hinges", "Mild Steel Plates", "Plain & Deformed Bar", "Plain G.I. Sheets", "Roofing", "Square & Section Bars", "Welding Rod");
								   sort($categories);

								   $arrlength = count($categories);

									for($x = 0; $x < $arrlength; $x++) {
									  
									
								?> 

								<div class="input-checkbox">
									<input type="checkbox" name="category-<?php echo $x; ?>" id="category-<?php echo $x; ?>">
									<label for="category-<?php echo $x; ?>">
										<span></span>
										<?php echo $categories[$x]; ?>
										<small>(120)</small>
									</label>
								</div>

								<?php 
								   }
								?>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

					</div>
				</div>
			</div>
					<!-- /ASIDE --

					<!-- STORE -->
					<div id="store" class="col-md-9">
						
						<!-- store TOP filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 9 of 9 products</span>
						</div>
						<!-- /store TOP filter -->

						<!-- store products -->
						<div class="row">

								<?php  
								   $productdetails=array("Category", "Product Name", "₱ 980.00", "₱ 990.00");
								   $productimages=array("./img/product01.jpg", "./img/product02.png","./img/product03.png", "./img/product04.png", "./img/product05.png", "./img/product06.png", "./img/product07.jpg", "./img/product08.jpg", "./img/product09.jpg" );
								   $arrlength = count($productimages);

									for($x = 0; $x < $arrlength; $x++) {
									  
									
								?> 

								<!-- product -->
								<div class="col-md-4 col-xs-6">
									<div class="product">

										<div class="product-img">
											<img src="<?php  echo $productimages[$x]; ?>" alt="">
										</div>

										<div class="product-body">
											<p class="product-category"><?php  echo $productdetails[0]; ?></p>
											<h3 class="product-name"><a href="#"><?php  echo $productdetails[1] ." " .($x+1); ?></a></h3>
											<h4 class="product-price"> <?php  echo $productdetails[2]; ?> <del class="product-old-price"> <?php  echo $productdetails[3]; ?> </del></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>

												<button class="quick-view"><a href="product.php?productID=0"><i class="fa fa-eye"></i></a><span class="tooltipp">See details</span></button>
											</div>
										</div>

										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
								</div>
								<!-- /product -->
							<?php 
								}
							?>
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 9 of 9 products</span>
						</div>
						<!-- /store bottom filter -->

					</div>
					<!-- /STORE -->
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
							<p>Follow us in <strong> Social Media</strong></p>
							
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
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Returns and Exchange </a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
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
