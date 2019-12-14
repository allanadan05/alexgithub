<?php
session_start();
require_once("connection.php");
include('function2.php');
	 
	 $userprofile=$_SESSION['user_name'];
	 
	 if($userprofile==true){
		 $query="SELECT * FROM `myaccounttbl` WHERE username='$userprofile' ";
		 $data=mysqli_query($con, $query);
		 $result=mysqli_fetch_assoc($data);
		 $id=$result['accountid'];
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

 <!-- W3 Custom stlylesheet -->
        <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script>
            function sendmsg(id){
                document.getElementById("msgto").value=id;
            }

            function sendmsgnow(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) { 
                    document.getElementById("messageresult").innerHTML=this.responseText;
                    }
                    
            };

                    var messageto=document.getElementById("msgto").value;
                    var messagefrom=document.getElementById("msgfrom").value;
                    var messagehere=document.getElementById("msghere").value;                   
                    var palatandaan = "sendmessage";
                    xhttp.open("GET", "process2.php?palatandaan="+palatandaan+"&messageto="+messageto+"&messagefrom="+messagefrom+"&messagehere="+messagehere, true);
                    xhttp.send(); 
            
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
                                            
                                           <div class="panel-heading" style="background-color: #ff3300; color: #fff;"><h3><center><b>  Admin </b> </center> </h3>
                                                        <span style="float: right;">
                                                        <a href='accountadminedit.php?adminID=<?php echo $result['username']; ?> '>
                                                        <button type="submit" class="btn-primary" > <i class="fa fa-edit"></i>  Edit </button> 
                                                        </a>
                                                        </span>
                                                       
                                                        <table class="table table-responsive ">
                                                            <tr>
                                                                <th style="text-align: right;">Firstname: </th>
                                                                <td><?php echo $result['firstname']; ?></td>
                                                            </tr style="text-align: right;">
                                                            <tr>
                                                                <th style="text-align: right;">Lastname: </th>
                                                                <td><?php echo $result['lastname']; ?></td>
                                                            </tr>               
                                                        </table>


                                           </div>

                                                 <div class="panel-body">
                                                <a href="adminnotifications.php" >
                                                    <span><i class="fa fa-bell"></i></span>
                                                    <span>Notifications</span>
                                                    <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;">2</div>
                                                </a>
                                                </div>
                                                <div class="panel-body" style="background-color: #cce6ff;">
                                                <a href="adminmessages.php">
                                                    <span><i class="fa fa-envelope"></i></span>
                                                    <span>Messages</span>
                                                    <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;"><?php echo countmessage($id); ?></div>
                                                </a>
                                                </div>
                                                    
                                                <div class="panel-body">
                                                    <a href="adminproduct.php">
                                                    <span><i class="fa fa-cube"></i></span>
                                                    <span>Product Management</span>
                                                    </a>
                                                </div>

                                                <div class="panel-body">
                                                    <a href="adminproduct.php">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span>Feedback Management</span>
                                                    </a>
                                                </div>

                                                <div class="panel-body">
                                                    <a href="adminsales.php">
                                                    <span><i class="fa fa-line-chart"></i></span>
                                                    <span>View Daily Sales</span>
                                                    </a>
                                                </div>
                                               
                                                <div class="panel-body">
                                                <a href="admininventory.php">
                                                    <span><i class="fa fa-bar-chart"></i></span>
                                                    <span>Inventory Management</span>
                                                </a>
                                                </div>

                                                <div class="panel-body">
                                                <a href="admindelivery.php">
                                                    <span><i class="fa fa-calendar-check-o"></i></span>
                                                    <span>Delivery Schedule</span>
                                                    <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;">1</div>
                                                </a>
                                                </div>

                                                <div class="panel-body">
                                                <a href="admincustomer.php">
                                                    <span><i class="fa fa-edit"></i></span>
                                                    <span>Customer Management</span>
                                                </a>                                                
                                                </div>

                                                <div class="panel-body">
                                                <a href="admininvoices.php">
                                                    <span><i class="fa fa-edit"></i></span>
                                                    <span>Invoices</span>
                                                </a>                                                
                                                </div>
                                            </div>
                                        </div>
                                    <!--/my account-->

				                     <!--first panel-->
				                      <div id="myaccount-details" class="col-md-8">
											 <!-- panel-info -->
											 <div id="messageresult"></div>
				                             <div class="panel panel-info">
				                                    <div class="panel-heading" id="personal">

				                                    	<b><span><i class="fa fa-envelope"></i></span> Messages</b>
				                                    	
				                                    </div>
				                                             <div class="panel-body">
                                                                
                                                                <table class="table" border=0>
						
						
<!-- 
										<tr>
											<th>Date	</th> 
											<th>Message</th>
											<th><center> Action </center> </th>
											
										</tr>	 -->

										 <!-- collapse -->
	                                      <div >
										  <?php 
										
										$sql="SELECT messagedate, msgtoaccountid, (SELECT concat(firstname, ', ', lastname) as name FROM myaccounttbl where accountid=messagingtbl.msgfromaccountid ) as fullname, (SELECT accountid FROM myaccounttbl where accountid=messagingtbl.msgfromaccountid ) as acctid, messagetext from messagingtbl WHERE msgtoaccountid='$id' ORDER BY messagedate Desc " ;
										$result=mysqli_query($con, $sql);
										$count=1;
										while($row=mysqli_fetch_array($result)){
										{  
										 
										
										?>
                                            <tr data-toggle="collapse" data-target="#request<?php echo $count; ?>" style="background-color: whitesmoke; text-align: left;"> 
											<td><?php echo $row['messagedate']; ?></td>
											<td><p class="notifications-message" ><b><?php echo $row['fullname'];?></b> messaged you.</p></td>
											<td></td>
											</tr>
  										  

										<tr id="request<?php echo $count++; ?>" class="collapse">
											<td></td>
											<td><p class="notifications-message"><?php echo $row['messagetext']; ?></p></td>
											<td><center><button style="height:auto; width: auto; border-radius: 25px;" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#sendmessage" onclick="sendmsg(<?php echo $row['acctid']; ?>)"> <span><i class="fa fa-envelope"></i></span> Reply </button></center></td>
											
										</tr>
										<?php }
										
									}?>
									</div>

																
							 </table> 

                                                             
				                     <!--/first panel--> 


				                      
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

		<!-- Modal -->
        <div class="modal fade" id="sendmessage" role="dialog">
            <div class="modal-dialog modal-md">

            
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 style="font-size: 16px; font-weight: bold;">Message</h6>
                    <input type="hidden" id="date">
                    <input type="hidden" id="msgfrom" value="<?php echo $_SESSION['userid']; ?>">
                    <input type="hidden" id="msgto">
                </div>
                <div class="modal-body">
                <textarea rows="4" cols="78" id="msghere" name="messagetext"style="border:none;" placeholder="Message goes here!.."></textarea>
                </div>
                <div class="modal-footer">
                <button  class="btn btn-primary btn-sm " onclick="sendmsgnow()" data-dismiss="modal"> <span><i class="fa fa-envelope"></i></span> SEND </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              
            </div>
            </div>
        </div>
        <!--/modal  -->

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
						<li><button class="primary-btn"><a href="logout.php" style="color: white;"><span><i class="fa fa-power-off"></i></span> Logout</a></button></li>
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
