<?php
session_start();
require_once("connection.php");
     $logacc="Log In";
     @$userprofile=@$_SESSION['user_name'];

     $ASK=" select reviewmessage,firstname,myaccountID,stars from myaccounttbl inner join feedbacktbl on feedbacktbl.accountid=myaccounttbl.accountid where username='$userprofile' ";
     $INFO=mysqli_query($con, $ASK);
     $result=mysqli_fetch_assoc($INFO);
     $myaccoundID = $result['myaccountID'];
     if($userprofile==true){
     	$userid=$result['myaccountID'];

        $logacc=$result['firstname'];
        $review=$result['reviewmessage'];
        $stars=$result['stars'];
     }


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<![endif]-->
		<script>
			$(document).ready(function(){
				
				$("#hide").hide();
				$("#comments").hide();
				$("#button").click(function(){
					$('#comments').slideDown();
					$("#hide").show();
					$("#button").hide();

				});
			$("#hide").click(function(){
				$("#comments").slideUp();
				$("#hide").hide();
				$("#button").show();
			});
			});
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

					<!-- ASIDE -->
					<div id="aside" class="col-md-3">

						<div>
							<h6>Advertisements</h6>
							<hr>
						</div>

					</div>
					<!-- /ASIDE --

					<!-- STORE -->
					<div id="store" class="col-md-6">

						<h1>News Feed</h1>

						<hr>

						<div style="background-color: whitesmoke">
							<div class="post">

								<div class="userphoto" style="clear: both">
									<h4><img src="img/dan.jpg" alt="profile picture" width="80px" height="80px" style="border-radius: 50px; border-color: blue; padding: 10px;"> <?php echo $logacc?> </h4> <p> Write a Review</p>

								  <!--  <div class="staran">
										<span style="color: red;"class = "fa fa-star"></span>
                                        <span style="color: red;"class = "fa fa-star"></span>
                                        <span style="color: red;"class = "fa fa-star"></span>
                                        <span style="color: red;"class = "fa fa-star"></span>
                                        <span style="color: red;"class = "fa fa-star"></span>
                   

									</div>-->
									<?php if($stars ==1) {?> 

										<span style="color: red;"class = "fa fa-star"></span>
										<span class = "far fa-star"></span>
										<span class = "far fa-star"></span>
										<span class = "far fa-star"></span>
										<span class = "far fa-star"></span>
									<?php }?>
									<?php if($stars ==2) {?> 

										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span class = "far fa-star"></span>
										<span class = "far fa-star"></span>
										<span class = "far fa-star"></span>
									<?php }?>
										<?php if($stars ==3) {?> 

										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span class = "far fa-star"></span>
										<span class = "far fa-star"></span>
									<?php }?>
										<?php if($stars ==4) {?> 

										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span class = "far fa-star"></span>
									<?php }?>
										<?php if($stars ==5) {?> 

										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
										<span style="color: red;"class = "fa fa-star"></span>
									<?php }?>







									<p style="color: blue;">01 Jan 2019, 20 mins</p>
								</div>

								<div class="posttxt">
									<?php echo $review; ?>
								</div>
								<br>
							</div>
							<div class="image">
								<img src="img/product09.jpg" width="100%" height="100%">
							</div>
								<?php 
								$sql1="Select count(likeid) as liked from liketbl where accountid=2";
								$result1=mysqli_query($con,$sql1);
							$count=mysqli_fetch_assoc($result1);

								
							?>
							



							<div class="row">
							<div style="height: 30px;">
								<button style="padding: 2px; width: 32%;"><i class="fa fa-thumbs-up"> Like </i> <span><?php echo $count['liked']; ?> </span></button>
								<button style="padding: 2px; width: 32%;"><i class="fa fa-comment" id="pcomment"> Comment </i> <span> 5 </span></button>
								<button style="padding: 2px; width: 33%;"><i class="fa fa-share"> Share </i></button>
								<form method="post" action="feed.php">
								<input type="text" id="int" name="comment" placeholder="write your comment here" style="width: 92%"> <button> <i class="fa fa-send" type="submit" name="add" value="add"></i> </button>
							</form>
							</div>
						    </div>

							<br><br>
							<div class="row">
							<div class="comments" style="background-color: whitesmoke">

								<div class="userphoto col-md-2">
									
								</div>
							</div>
							</div>

							<br><br>
									<?php 
							$sql="Select commenttbl.comment,myaccounttbl.firstname,feedbacktbl.stars from myaccounttbl JOIN commenttbl on commenttbl.accountid=myaccounttbl.accountid join feedbacktbl on feedbacktbl.accountid=myaccounttbl.accountID LIMIT 1";
							$result=mysqli_query($con,$sql);
							if(mysqli_num_rows($result)>0)
							
							{
								while($row = mysqli_fetch_assoc($result))
								{

							?>
							
							<div class="row">
							
								


							
							<div class="comments" style="background-color: whitesmoke">
							


								<div class="userphoto col-md-2">
									<h4><img src="img/dan.jpg" alt="profile picture" width="60px" height="60px" style="border-radius: 50px; border-color: blue; padding: 10px;"> </h4>
								</div>
								<div class="userphoto col-md-4">
									<strong><?php echo $row['firstname']?> </strong><p style="color: blue;">01 Jan 2019, 20 mins</p>
									



									<p><?php echo $row['comment']?></p>

								</div>
							
							</div>
							
						
							
							</div>
										<?php
						}
						}
							?>
							
							












							<div id="comments">





									<?php 
							$sql="Select commenttbl.comment,myaccounttbl.firstname,feedbacktbl.stars from myaccounttbl JOIN commenttbl on commenttbl.accountid=myaccounttbl.accountid join feedbacktbl on feedbacktbl.accountid=myaccounttbl.accountID";
							$result=mysqli_query($con,$sql);
							if(mysqli_num_rows($result)>0)
							
							{
								while($row = mysqli_fetch_assoc($result))
								{

							?>
							
							<div class="row">
							
								


							
							<div class="comments" style="background-color: whitesmoke">
							


								<div class="userphoto col-md-2">
									<h4><img src="img/dan.jpg" alt="profile picture" width="60px" height="60px" style="border-radius: 50px; border-color: blue; padding: 10px;"> </h4>
								</div>
								<div class="userphoto col-md-4">
									<strong><?php echo $row['firstname']?> </strong><p style="color: blue;">01 Jan 2019, 20 mins</p>


									<p><?php echo $row['comment']?></p>

								</div>
							
							</div>
							
						
							
							</div>
										<?php
						}
						}
							?>
						</div>
						

							<center><a><b id="button" style="cursor:pointer;">Show more</b> </a></center>
							<center><a><b id="hide" style="cursor:pointer;">show less</b> </a></center>

					</div>

					<hr>

					





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
