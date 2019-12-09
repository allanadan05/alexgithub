

<?php
require_once('connection.php');
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

 		<!-- jesus css -->
 		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	    <link rel="stylesheet" href="assets/css/styles.css">
	    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
	    <link rel="stylesheet" href="assets/css/cool-link.css">
	    <link rel="stylesheet" href="assets/css/slideInDown.css">
	    <link rel="stylesheet" href="assets/css/slideInLeft.css">
	    <link rel="stylesheet" href="assets/css/slideInRight.css">
	    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
	    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
	    <link rel="stylesheet" href="assets/css/Google-Style-Login-1.css">

 		<!-- Custom stlylesheet 
 		<link type="text/css" rel="stylesheet" href="css/stevenstyle.css"/>
		-->
		
 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

 		<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	   </script>

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

						<!--
						<div id="loginform" class="login-card">
						-->
						<div  id=printMe style="max-width:600px;
							  padding:40px 40px;
							  background-color:#F7F7F7;
							  margin:0 auto 25px;
							  margin-top:50px;
							  border-radius:2px;
							  box-shadow:10px 10px 20px rgba(0, 0, 0, 0.3);
							  border-radius:0px 50px 0px 50px;">
							<h3 style="color:#ff3300"><center>Sales Invoice</center></h3>
				            <table class="table table-responsive">
				            	<tr>
				            		<th >Invoice No.</th>
				            		<td> 123edc</td>
				            	</tr>
				            	<tr> 
				            		<th> Accesscode </th>
				            		<td> 123edcjuan</td>
				            	</tr>
				            	<tr> 
				            		<th> CustomerName </th>
				            		<td> Juan Dela Cruz</td>
				            	</tr>
				            	<tr> 
				            		<th> Address </th>
				            		<td> Franciso Homes, City of San Jose Del Monte</td>
				            	</tr>
				            	<tr> 
				            		<th> CompanyName </th>
				            		<td> ABS-CBN</td>
				            	</tr>
				            	<tr> 
				            		<th> TIN no. </th>
				            		<td>123-456-789</td>
				            	</tr>
				            	<tr> 
				            		<th> Date </th>
				            		<td> 4/12/2019</td>
				            	</tr>
				            	<tr> 
				            		<th> Shipping Fee </th>
				            		<td> Free</td>
				            	</tr>
				            	<tr> 
				            		<th> Products </th>
				            		<td> 
				            			<table class="table table-responsive table-hover">
				            				<tr style="background-color: #0033cc; color: #fff;">
					            				<th>Quantity</th>
					            				<th>Product</th>
					            				<th>Amount</th>
					            			</tr>
					            			<tr>
					            				<td>1</td>
					            				<td>BI & GI Pipe</td>
					            				<td> ₱ 30.00 </td>
					            			</tr>
					            		 <tfoot style="background-color: #0033cc; color: #fff;">
					            		 	<th></th>
					            		 	<th>Total Amount Due: </th>
					            		 	<td>₱ 30.00</td>
					            		 </tfoot>
				            			</table>
				            		</td>
				            	</tr>
				            	<tr>
				            		<th>Amount Due:</th>
				            		<td>₱ 28, 671.43</td>
				            	</tr>
				            	<tr>
				            		<th>VAT:</th>
				            		<td>₱ 3, 440.57</td>
				            	</tr>
				            	<tr>
				            		<th>Total Amount Due:</th>
				            		<td>₱ 32, 112.00</td>
				            	</tr>
				            </table>

				            <a href="">
				            	<button class="primary-btn" style="float: right;" onclick="printDiv('printMe')"> <span><i class="fa fa-print"></i></span> Print</button>
				            </a>
				            <hr>
				            <br>
				    </div>

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
						<li><a href="product.php">Products</a></li>
						<li><a href="trackorder.php">Track My Order</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="help.php">Help</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

	</body>
</html>
