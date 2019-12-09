<?php
session_start();
require_once("connection.php");
     
     $userprofile=$_SESSION['user_name'];
     
     if(isset($userprofile)){
     if($userprofile==true){
         $query="SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
         $data=mysqli_query($con, $query);
         $row=mysqli_fetch_assoc($data);      
     }

     if($row['usertype']==='user'){
            header('location:account.php');
         }

     else if($row['usertype']==='admin'){
     		//header('location:admin.php');   
         }

     else{
         	header('location:login.php');
     }
 }//end isset userprofile



		$userID=$_GET['id'];
		$query3="SELECT * FROM `myaccounttbl` WHERE `ID`='$userID' AND `usertype`='user' ";
     $data3=mysqli_query($con, $query3);
     $result=mysqli_fetch_assoc($data3);   

     $_SESSION['custID']=$result['ID'];
     $_SESSION['custuser']=$result['username'];
	

						     

   

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

						<div id="loginform" class="login-card">
							<h3 style="color:#ff3300"><center>EDIT</center></h3>

							

				        <form class="form-signin" action="registercheck.php" method="POST"><span class="reauth-email"> </span>

				        	

				        	<label>Basic Information:  </label>
				            <input class="form-control inputLogin" type="text" placeholder="Firstname" name="firstname" value="<?php echo $result['firstname']; ?>" required>

				            <input class="form-control inputLogin" type="text"  placeholder="Lastname" name="lastname" value="<?php echo $result['lastname']; ?>"  required>

				            <input class="form-control inputLogin" type="text" placeholder="Company (Optional)" name="company" value="<?php echo $result['company']; ?>" >

				            <input class="form-control inputLogin" type="text" placeholder="TIN Number of Company" name="tin" value="<?php echo $result['tin']; ?>" >
				            
				            <label>Gender:  </label><br>

				            <input type="radio" value="Male" name="gender"  <?php  if($result['company']=="Male"){echo "Selected";}  ?> > Male

				            <input type="radio" value="Female" name="gender" <?php  if($result['company']=="Male"){echo "Selected";}  ?>> Female

				            <br><br>

				            <label>Address:  </label>

				            <input class="form-control inputLogin" type="text" placeholder="House no./Stree no." name="houseno"  value="<?php echo $result['houseno']; ?>" required>

				            <input class="form-control inputLogin" type="text" placeholder="Barangay" name="barangay"  value="<?php echo $result['barangay']; ?>" required>

				            <input class="form-control inputLogin" type="text" placeholder="Municipal/City" name="municipal"  value="<?php echo $result['municipal']; ?>" required>

				            <input class="form-control inputLogin" type="text" placeholder="Province" name="province"  value="<?php echo $result['province']; ?>" required>

				            <input class="form-control inputLogin" type="text" placeholder="Zipcode" name="zipcode"  value="<?php echo $result['zipcode']; ?>">


				            <label>Contact Information:  </label>
				            <input class="form-control inputLogin" type="text" placeholder="Mobile Number" name="mobileno"  value="<?php echo $result['mobileno']; ?>" required>

				            <label>Login Details:  </label>
				            <input class="form-control inputLogin" type="email" placeholder="Email" name="email"   value="<?php echo $result['email']; ?>" required>

				            <input class="form-control inputLogin" type="text" placeholder="Username" name="username"  value="<?php echo $result['username']; ?>" required>

				            <input class="form-control inputLogin" type="password" placeholder="Password" name="password"  value="<?php echo $result['password']; ?>" required>

				            

				            <button class="primary-btn" type="submit" name="customeredit" >SAVE</button>
				            
				        </form>
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
