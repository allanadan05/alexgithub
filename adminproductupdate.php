

<?php
require_once('connection.php');

@$pID=$_GET['productID'];

@$p=mysqli_query($con, "SELECT * FROM `productstbl` WHERE `productID`=$pID  ");
@$pq=mysqli_fetch_assoc($p);

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
							<h3 style="color:#ff3300"><center>Update Product</center></h3>
				            
				            <table class="table table-responsive table-hover">
                                                          <form method="POST" action="productupdate.php" enctype="multipart/form-data">

                                                          	<?php
														        if(isset($_GET['productsmsgsuccess'])){
														        echo '<div class="alert alert-success" id="message"> <center>' .$_GET['productsmsgsuccess'] .' </center></div>';
														        }
														        if(isset($_GET['productsmsgerr'])){
														        echo '<div class="alert alert-danger" id="message"> <center>' .$_GET['productsmsgerr'] .' </center></div>';
														        }
													        ?>

                                                            <tr hidden>
                                                            <th style="text-align: right;"> ProductID:</th>
                                                            <td> <input type="text" name="productID" value=<?php echo $pID; ?> > </td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Product Name:</th>
                                                            <td> <input type="text" name="productname" value="<?php echo $pq['productname'];?>" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;" required> Choose Category:</th>
                                                            <td> 
                                                                <select class="input-select" name="category" >
                                                                <option value="<?php echo $pq['category'];  ?>"><?php echo $pq['category'];  ?></option>
                                                                <option value="B.I. & G.I. Pipes">B.I. & G.I. Pipes</option>
                                                                <option value="B.I. & G.I. Tubulars">B.I. & G.I. Tubulars</option>
                                                                <option value="Channels">Channels</option>
                                                                <option value="Flat & Angle Bars">Flat & Angle Bars</option>
                                                                <option value="Handles & Hinges">Handles & Hinges</option>
                                                                <option value="Mild Steel Plates">Mild Steel Plates</option>
                                                                <option value="Plain & Deformed Bar">Plain & Deformed Bar</option>
                                                                <option value="Plain G.I. Sheets">Plain G.I. Sheets</option>
                                                                <option value="Roofing">Roofing</option>
                                                                <option value="Square & Section Bars">Square & Section Bars</option>
                                                                <option value="Welding Rod">Welding Rod</option>
                                                                </select>
                                                            </td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Image:</th>
                                                            <td> <img src="<?php echo $pq['image'];?>" width="200px"> <input type="file" value="<?php echo $pq['image'];?>" name="image"  required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Principal Price:</th>
                                                            <td> <input type="number" name="principalprice" value="<?php echo $pq['principalprice'];  ?>" required>
                                                            </td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Selling Price:</th>
                                                            <td> <input type="number" name="sellingprice" value="<?php echo $pq['sellingprice'];  ?>" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> In-stock:</th>
                                                            <td> <input type="number" name="instock" value="<?php echo $pq['instock'];  ?>" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Description:</th>
                                                            <td> <textarea name="description" rows="5" cols="40" placeholder="Describe your product..."  required><?php echo $pq['description'];  ?></textarea></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Details:</th>
                                                            <td> <textarea name="details" rows="5" cols="40"  placeholder="Let the user know what's on this product..." required><?php echo $pq['details'];  ?></textarea></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Additional Info (Optional):</th>
                                                            <td> <textarea name="additionalinfo" rows="5" cols="40"  placeholder="Add additional info if in case you think there is a need of elaboration..."><?php echo $pq['additionalinfo'];?></textarea></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Available in:</th>
                                                            <td> <textarea name="availablein" rows="5" cols="40" placeholder="Cite availabilities of the product (example: color, size, and etc.)" required><?php echo $pq['availablein'];?></textarea></td>
                                                            </tr>
                                                            <div>
                                                             <a href="productupdate.php">
												            	<button class="primary-btn" style="float: right;" name="produpdate"> <span><i class="fa fa-save"></i></span> Save</button>
												            </a>
												            </div>
															</form>
                                                            </table>

				           
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
