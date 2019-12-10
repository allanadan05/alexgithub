<?php
session_start();
require_once("connection.php");

	 $userprofile=$_SESSION['user_name'];

	 if($userprofile==true){
		 $query="SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
		 $data=mysqli_query($con, $query);
		 $result=mysqli_fetch_assoc($data);
     }

     if($result['usertype']==='user'){

		 }

	 else if($result['usertype']==='admin'){
		 	header('location:admin.php');
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

 			function signOut() {
			    var auth2 = gapi.auth2.getAuthInstance();
			    auth2.signOut().then(function () {
			      console.log('User signed out.');
			    });
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



			<!-- SECTION -->
				<div class="col-md-12">
				<div class="row">

					<div class="section">

							<!-- container -->
						<div class="container">

								<!-- row -->
							<div class="row">

				                <!-- my account -->


				                 <div id="myaccount-section" class="col-md-3">

				                     <div class="panel">

				                           <div class="panel-heading" style="background-color: #ff3300; color: #fff;"><h5><center><b>  Hello, <?php echo $result['firstname'] ." " .$result['lastname'] ?> !</b> </center></h5>
				                           </div>


				                                <div class="panel-body" style="background-color: #cce6ff;"><a href="account.php" style="color: #000066; "> <span><i class="fa fa-user"></i></span> Personal Details</a></div>
				                                <div class="panel-body"><a href="accountnotif.php"> <span><i class="fa fa-bell"></i></span> Notifications</a>
				                                <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;">3</div>
				                          	    </div>

				                          	    <div class="panel-body"><a href="messages.php"> <span><i class="fa fa-envelope"></i></span> Messages</a> <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;">3</div>
				                          	    </div>

				                                <div class="panel-body"><a href="accounthistory.php"> <span><i class="fa fa-history"></i></span> History of purchases</a></div>

				                                <div class="panel-body"><a href="accountbalances.php"><span><i class="fa fa-money"></i></span> Balances</a></div>
				                     </div>

				                    </div>
				                    <!--/my account-->

				                     <!--first panel-->
				                      <div id="myaccount-details" class="col-md-8">
				                      	   <!-- panel-info -->
				                             <div class="panel panel-info">
				                                    <div class="panel-heading" id="personal">

				                                    	<b>Personal Details</b>
				                                    	<span style="float: right;">
				                                    	<a href="accountpersonaledit.php#personal">
				                                    	<button type="submit" class="primary-btn" > <i class="fa fa-edit"></i>  Edit </button>
				                                        </a>
				                                    	</span>
				                                    </div>
				                                             <div class="panel-body">

				                                             	<div class="Address-details">
				                                                     <div class="col-md-6">
				                                                     	<table class="table table-responsive table-hover">
				                                                     		<tr>
				                                                     			<th style="text-align: right;">FirstName: </th>
				                                                     			<td> <?php echo $result['firstname'] ?></td>
				                                                     		</tr style="text-align: right;">
				                                                     		<tr>
				                                                     		    <th style="text-align: right;">Lastname: </th>
				                                                     			<td><?php echo $result['lastname'] ?></td>
				                                                     		</tr>
				                                                     		<tr>
				                                                     			<th style="text-align: right;">Company Name (Optional): </th>
				                                                     			<td> <?php echo $result['company']; ?> </td>
				                                                     		</tr>
				                                                     		<tr>
				                                                     			<th style="text-align: right;">TIN no. of Company: </th>
				                                                     			<td><?php echo $result['tin'] ?></td>
				                                                     		</tr>

				                                                     		<tr>
				                                                     			<th style="text-align: right;">Gender: </th>
				                                                     			<td><?php echo $result['gender'] ?></td>
				                                                     		</tr>
				                                                     		<tr>
				                                                     			<th style="text-align: right;">Mobile no: </th>
				                                                     			<td><?php echo $result['mobileno'] ?></td>
				                                                     		</tr>
				                                                     	</table>
				                                                      </div>
                                                               </div>


				                                            </div>
				                     <!--/first panel-->


				                      <!--2nd panel-->
				                                           <div class="panel-heading" id="permanent"><b>Permanent Address</b>

				                                           	<span style="float: right;">
				                                           	<a href="accountpermanent.php#permanent">
					                                    	<button type="submit" class="primary-btn" > <i class="fa fa-edit"></i>  Edit </button>
					                                        </a>
					                                    	</span>

				                                           </div>


				                                                 <div class="panel-body">

				                                                 	<div class="Address-details">
				                                                     <div class="col-md-6">
				                                                     	<table class="table table-responsive table-hover">
				                                                     		<tr>
				                                                     			<th style="text-align: right;">Address: </th>
				                                                     			<td><?php echo $result['houseno'] .", "   .$result['barangay'] .", "   .$result['municipal'] .", "  .$result['province'] ." "  .$result['zipcode'] ?></td>
				                                                     		</tr style="text-align: right;">
				                                                     	</table>
				                                                      </div>
                                                                  </div>


				                                                 </div>


				                      <!--/2nd panel-->



				                      <!--3rd panel-->


				                                    <div class="panel-heading" id="details">

				                                    	<b>Account Details</b>
				                                    	<span style="float: right;">
				                                    	<a href="accountdetails.php#details">
				                                    	<button type="submit" class="primary-btn" > <i class="fa fa-edit"></i>  Edit </button>
				                                        </a>
				                                    	</span>
				                                    </div>
				                                    <div class="panel-body">

				                                                     <div class="Address-details">
				                                                     			<div class="col-md-6">
				                                                     			<table class="table table-responsive table-hover">
				                                                     				<tr>
				                                                     					<th style="text-align: right;">Email: </th>
				                                                     					<td><?php echo $result['email'] ?></td>
				                                                     				</tr style="text-align: right;">
				                                                     				<tr>
				                                                     					<th style="text-align: right;">Username: </th>
				                                                     					<td><?php echo $result['username'] ?></td>
				                                                     				</tr>
				                                                     				<tr>
				                                                     					<th style="text-align: right;">Password: </th>
				                                                     					<td> <?php echo md5($result['password']); ?> </td>
				                                                     				</tr>
				                                                     			</table>
				                                                                </div>
                                                                    </div>
				                                   </div>
				                     <!--/3rd panel-->
				                        <!--/my account-->

				                        		</div>
				                        		<!-- /panel-info -->
								</div>
								<!-- /row -->

							</div>
							<!-- /container -->
						</div>

						</div>
					    </div>
						<!-- /SECTION -->


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
						<li><button class="primary-btn"><a href="logout.php" style="color: white;" onclick="signOut();"> <span><i class="fa fa-power-off"></i></span> Logout</a></button></li>
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
