<?php
session_start();
require_once("connection.php");
     $logacc="Log In";
     @$userprofile=@$_SESSION['user_name'];
	@$id=@$_SESSION['userid'];
     $ASK=" SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
     $INFO=mysqli_query($con, $ASK);
     $result=mysqli_fetch_assoc($INFO);
     $myaccoundID = $result['myaccountID'];
	
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<Style>
	#briks{
		text-align: center;
	}
	#rate-us{
		width: 200px;
		border-radius: 20px;
		background-color:#EF401A;

	}
	#submitted{
		border-radius: 20px;
		background-color:#EF401A;
	}
	.rating{
	position:absolute;
	top:50%;
	left: 50%;
	transform:translate(-50%,-50%) rotateY(180deg);
	display:flex; 
}

.rating input{
	display:none;
}
.rating label{
display:block;
cursor: pointer;
width: 50px;

}

.rating label:before{
	content:'\f005';
	font-family: fontAwesome;
	position:relative;
	display: block;
	font-size: 50px;
	color:gray;

}
.rating label:after{
	content:'\f005';
	font-family:fontAwesome;
	position:absolute;
	display:block;
	font-size:50px;
	color:#EF401A;	
	top: 0;
	opacity: 0;
	transition:.5s;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
}

.rating label:hover:after,
.rating label:hover ~ label:after,

.rating input:checked ~ label:after{
	opacity: 1;
}	

		</Style>

		<script>

		function countstar(id){

			document.getElementById("star-no").value=id;
		}
		

		function submitpid(pid) {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (xhttp.readyState == 4 && xhttp.status == 200) {	
					document.getElementById("response").innerHTML = this.responseText;
					document.getElementById("rate-us").style.display ="none";
		    }
		  };
			var feedback = document.getElementById("briks").value;
			var noofstar = document.getElementById("star-no").value;
			var ratefrom = document.getElementById("ratefrom").value;
			var sendpid= pid;

			
			
			var palatandaan = "sendstars";
			xhttp.open("GET", "process4.php?&palatandaan="+palatandaan+"&feedback="+feedback+"&noofstar="+noofstar+"&ratefrom+"+ratefrom,true);
		    xhttp.send(); 
		}

		</script>

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
						<li class="active"><a href="feed.php">Feed</a></li>
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

					<?php
							 @$idatheader=@$_GET['id'];
				              $sql = "SELECT * FROM productstbl where pid='$idatheader'";
				              $result = mysqli_query($con, $sql);

				              if (mysqli_num_rows($result) > 0) {
				                $row = mysqli_fetch_assoc($result); 
							?>


					<!-- Product main img -->
					<!-- Big Picture -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">

							
							<div class="product-preview">
								<img src="<?php echo $row['image']; ?>" alt="">
							</div>



						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<!-- Small Pictures -->
					<div class="col-md-2  col-md-pull-5">
						
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div id="product-main-img">

						<div class="product-details">
							<button style="display: inline" type="button" id="rate-us" class="primary-btn order-submit" onclick="<?php echo $row['pid']; ?>" data-toggle="modal" data-target="#myModal">
						    Rate Us
						  </button>
						  <hr>

							<h2 class="product-name"><?php echo $row['productname']; ?></h2>

							<div>
								<h3 class="product-price">₱ <?php echo $row['sellingprice']; ?>.00</h3>
								<span class="product-available"><?php echo $row['instock']; ?> Remaining Stock</span>
							</div>

							<p><?php echo $row['availablein']; ?></p>
							<p><?php echo $row['additionalinfo']; ?></p>

							<div class="product-options">

							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number" value="1" name="quantityvalue">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-links">
								<li><strong>Category:</strong> <?php echo $row['category']; ?></li>
							</ul>

						
							


						  <!-- The Modal -->
						  <div class="modal fade" id="myModal">
						    <div class="modal-dialog">
						      <div class="modal-content">
							  
								<form action="sendfeedback.php" method="POST">
						        <!-- Modal Header -->
						        <div class="modal-header">
						          <h4 class="modal-title">Rate Us</h4>
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						        </div>
						        
						        <!-- Modal body -->
						        <br>
						        <div class="modal-body">
									<br><br><br><br><br>
								<input type="hidden" name="accountid"  value="<?php echo $id ?>">
						         <input type="hidden" id="star-no" name="star-no" >
						          <div class="rating">

								<input type="radio" name="star" id="star1" onclick="countstar(5)">
								<label for="star1"></label>
								<input type="radio" name="star" id="star2" onclick="countstar(4)">
								<label for="star2"></label>
								<input type="radio" name="star" id="star3" onclick="countstar(3)">
								<label for="star3"></label>
								<input type="radio" name="star" id="star4" onclick="countstar(2)">
								<label for="star4"></label>
								<input type="radio" name="star" id="star5" onclick="countstar(1)">
								<label for="star5"></label>

						        </div>	
						        </div>
						        <div style="padding-bottom: 18px;"><span style="color: red;"></span><br/>
						<textarea placeholder="Review" id="feedback" name="feedback" false name="data_8" style="width : 595px;" rows="9" class="form-control"></textarea>
						</div>
						       
						        <!-- Modal footer -->
						        <div class="modal-footer">
						          <button type="submit" id="submitpidbtn" name="sendfeedback" class="btn btn-danger" value="<?php echo $row['pid']; ?>">Submit</button>
							  </form>
						        
						        </div>
						        
						      </div>
						    </div>
						  </div>

						</div>

					  </div>

					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">

							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>A flat, rectangular section with square edges varying in sizes. This cost-effective steel product is suitable for a wide variety of applications and is distributed into the construction, engineering, manufacturing, mining, grating, fabrication and many other industries.</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p><center>SIZE 13mm wide up to 400mm and 3mm thick to 25mm. Standard stock lengths are 6000mm or these can be cut to your required length.</center></p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
					<?php }else{

					} ?>
			
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

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
									<a href="#"><i class="fa fa-pinterest"></i></a>
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


