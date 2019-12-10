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
            header('location:account.php');
         }

     else if($result['usertype']==='admin'){

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
                                                        <a href='accountadminedit.php?adminID=<?php echo $_SESSION['userid']; ?> '>
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
                                                <a href="adminnotifications.php">
                                                    <span><i class="fa fa-bell"></i></span>
                                                    <span>Notifications</span>
                                                    <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;">2</div>
                                                </a>
                                                </div>

                                                <div class="panel-body">
                                                <a href="adminmessages.php">
                                                    <span><i class="fa fa-envelope"></i></span>
                                                    <span>Messages</span>
                                                    <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;">2</div>
                                                </a>
                                                </div>

                                                <div class="panel-body" style="background-color: #cce6ff;">
                                                <a href="admin.php">
                                                    <span><i class="fa fa-exclamation-circle"></i></span>
                                                    <span>Order Request</span>
                                                    <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;">2</div>
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



                                     <!-- panels for quick access / order requests panel -->
                                         <div class="col-md-9">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <b>
                                                <span><i class="fa fa-exclamation-circle"></i></span>
                                                <span> 2 Order Request </span>
                                                </b>

                                            </div>
                                            <div class="panel-body">

                                                             <div class="col-md-8">

                                                                <!-- Request1 -->
                                                              <button type="button" class="panel panel-primary" style="width: auto;" data-toggle="collapse" data-target="#request1"><input type="checkbox" name="" value=""> Juan Dela Cruz</button><br>
                                                              <div></div>

                                                              <div id="request1" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">

                                                                 <tr>
                                                                   <th style="text-align: right;">Date: </th>
                                                                       <td>Apr 05, 2019</td>
                                                                 </tr>

                                                                <tr>
                                                                                <th style="text-align: right;">CustomerID: </th>
                                                                                <td>123456</td>
                                                                            </tr style="text-align: right;">
                                                                            <tr>
                                                                                <th style="text-align: right;">CustomerName: </th>
                                                                                <td>Harry Potter</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;"> Products: </th>
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
                                                                                <th style="text-align: right;">Total Amount: </th>
                                                                                <td>₱980.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Location: </th>
                                                                                <td>B4 L3 Sto. Cristo, SJDM, Bulacan</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Payment Method: </th>
                                                                                <td>Paypal</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Shipping Fee: </th>
                                                                                <td>
                                                                                    <input type="number" name="">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Total Amount Due: </th>
                                                                                <td>₱980.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Set schedule: </th>
                                                                                <td>
                                                                                    <input type="date" name="">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Note/Message: </th>
                                                                                <td>
                                                                                    <textarea>  </textarea>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Action: </th>
                                                                                <td>
                                                                                    <span>
                                                                                    <button class="btn btn-primary">
                                                                                          Confirm
                                                                                    </button>

                                                                                    </span>
                                                                                </td>
                                                                            </tr>


                                                            </table>

                                                            </div>

                                                            <!-- /Request1 -->
                                                              <!-- Request2 -->
                                                              <button type="button" class="panel panel-primary" style="width: auto;" data-toggle="collapse" data-target="#request2"><input type="checkbox" name="" value=""> Juan Vva</button><br>
                                                              <div></div>
                                                              <div id="request2" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">

                                                                 <tr>
                                                                   <th style="text-align: right;">Date: </th>
                                                                       <td>Apr 05, 2019</td>
                                                                 </tr>

                                                                <tr>
                                                                                <th style="text-align: right;">CustomerID: </th>
                                                                                <td>123456</td>
                                                                            </tr style="text-align: right;">
                                                                            <tr>
                                                                                <th style="text-align: right;">CustomerName: </th>
                                                                                <td>Harry Potter</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;"> Products: </th>
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
                                                                                <th style="text-align: right;">Total Amount: </th>
                                                                                <td>₱980.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Location: </th>
                                                                                <td>B4 L3 Sto. Cristo, SJDM, Bulacan</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Payment Method: </th>
                                                                                <td>Paypal</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Shipping Fee: </th>
                                                                                <td>
                                                                                    <input type="number" name="">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Total Amount Due: </th>
                                                                                <td>₱980.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Set schedule: </th>
                                                                                <td>
                                                                                    <input type="date" name="">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Note/Message: </th>
                                                                                <td>
                                                                                    <textarea>  </textarea>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th style="text-align: right;">Action: </th>
                                                                                <td>
                                                                                    <span>
                                                                                    <button class="btn btn-primary">
                                                                                          Confirm
                                                                                    </button>

                                                                                    </span>
                                                                                </td>
                                                                            </tr>


                                                            </table>

                                                            </div>

                                                            <!-- /Request2 -->










                                            </div>
                                        </div>
                                        </div>

                                      <!-- /panels for quick access / order requests panel -->



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
