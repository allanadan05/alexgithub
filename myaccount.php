<!DOCTYPE html>
<html lang="en">
   <!-- Head folded -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title> [Blank] Alex Steel Supply</title>
		<link rel="icon" href="./img/AlexSteelSupplyLogoBlue.png" type="image">

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
        <?php include('headerandnav.php'); ?>

		

		<!-- SECTION -->
		<div class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

                    <!-- my account -->
                    
                        
                    <div id="myaccount-section" class="col-md-3">
                                </span>
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h5 class="welcome-msg">&nbsp &nbsp Hello, Steven Francisco</h5></div>
                                    
                                    
                                    <div class="panel-body"><a href="">Personal Details</a></div>
                                    <div class="panel-body"><a href="">Notifications</a></div>
                                    <div class="panel-body"><a href="">History of purchases</a></div>
                                    <div class="panel-body"><a href="">Balances</a></div>
                                </div>
                                </span>
                    </div>
                    <!--/my account-->

                                        <!--first panel-->
                                        <div id="myaccount-details" class="col-md-8">
                                                    <div class="panel panel-default">
                                                            <div class="panel-heading"><b>Personal Details</b></div>
                                                            <div class="panel-body">
                                                                
                                                                                            <div class="Address-details">
                                                                                            <p><b>Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b> Steven Francisco</p>
                                                                                            <p><b>Username:</b> Stevenigop</p>
                                                                                            <p><b>Email: &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</b>Steven123francisco@gmail.com</p>
                                                                                            <p><b>Tin number:</b>564654-546</p>
                                                                                            
                                                                                            </div>
                                                                                            <div class="Address-details2">
                                                                                            <p><b>Mobile number:</b> 09566565478</p>
                                                                                            <p><b>Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> ********</p>
                                                                                            <p><b>Company Name:</b> kratos Smartphone</p>
                                                                                            <p><b>Zip Code: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> 69</p>
                                                                                            
                                                                                            
                                                                                            </div>
                                                                                            <div class="panel-body">
                                                                                            <p class="Address-details3"><b>Address:</b> &nbspB1 lot 31 Igay Stro Cristo CSJDM Bulacan</p>

                                                                                            </div>



                                                            </div>
                                        <!--/first panel--> 
                                                           
                                                            
                                                    
                                            <!--2nd panel-->
                                                <div class="panel-heading"><b>Billing/Address</b></div>
                                           
                                                      
                                                            <div class="panel-body">

                                                                <form action="" method="POST">
                                                                        
                                                                        <input type="text" name="Firstname" placeholder="Firstname" required>
                                                                        <input type="text" name="Lastname" placeholder="Lastname" required>
                                                                        
                                                                        <br><br>
                                                                        
                                                                        <input type="text" name="companyname" placeholder="Companyname" required>
                                                                        <p>(Optional)</p>
                                                                        

                                                                        
                                                                       <input type="text" name="tinnumber" placeholder="Tin number" required>
                                                                       <p>(Required if Company Name is Selected)</p>
                                                                       
                                                                        <hr>
                                                                
                                                                                
                                                                                <input type="text" name="streetnumber" placeholder="Street no." required>
                                                                                <input type="text" name="barangay" placeholder="Barangay" required>
                                                                                <input type="text" name="city" placeholder="Municipality/City" required>
                                                                                <br><br>
                                                                            

                                                                   
                                                                    <input type="text" name="Province" placeholder="Province" required>
                                                                    <input type="text" name="zipcode" size="10" placeholder="Zip Code" required>
                                                                    <hr> 
                                                                    <input type="text" name="mobilenumber" placeholder="Mobile number" required>
                                                                    <input type="email" name="email" placeholder="Email" required>
                                                                     <br><br>
                                                                    <input type="text" name="username" placeholder="Username" required>
                                                                   
                                                                    <input type="password" name="password" placeholder="Password" required>
                                                                    <br><br>
                                                                    
                                                                
                                                            
                                                                    </form>
                                                            </div>
                                                        


                                                </div>
                                        <!--/2nd panel-->
                                         <input type="submit" value="Edit" class="edit-btn">
                                    
                        <!--/my account-->                                                 
                                        
                                  








				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->





		

   		<?php include('footer.php'); ?>

	</body>
</html>
