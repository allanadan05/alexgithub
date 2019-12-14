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
                                                    <div style=" float: right; top: -10px;  width: 20px;height: 20px; line-height: 20px; text-align: center; border-radius: 50%;font-size: 10px;color: #FFF;background-color: #ff3300;"><?php echo countmessage($id); ?></div>
                                                </a>
                                                </div>


                                                <div class="panel-body" style="background-color: #cce6ff;">
                                                    <a href="adminproduct.php">
                                                    <span><i class="fa fa-cube"></i></span>
                                                    <span>Product Management</span>
                                                    </a>
                                                </div>

                                                <div class="panel-body" >
                                                    <a href="adminsales.php">
                                                    <span><i class="fa fa-line-chart"></i></span>
                                                    <span>Sales Management</span>
                                                    </a>
                                                </div>

                                                <div class="panel-body" >
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
                                                <span><i class="fa fa-cube"></i></span>
                                                    <span>Products</span>
                                                    <span style="float:right;">

                                                    <a href="">


                                                    </a>
                                                    </span>
                                            </div>
                                            <div class="panel-body">

                                                 <?php
                                                        if(isset($_GET['productsmsgerr'])){
                                                        echo '<div class="alert alert-danger" id="message"> ' .$_GET['productsmsgerr'] .' </div>';
                                                        }
                                                        if(isset($_GET['productsmsgsuccess'])){
                                                        echo '<div class="alert alert-success" id="message"> <center>' .$_GET['productsmsgsuccess'] .' </center></div>';
                                                        }

                                                    ?>


                                                <div class="col-md-10">

                                                      <ul class="nav nav-tabs">

                                                        <li class="active"><a data-toggle="tab" href="#menu1">Add New Product</a></li>
                                                        <li><a data-toggle="tab" href="#menu2">List of Products</a></li>
                                                        <li ><a data-toggle="tab" href="#home">New Transaction</a></li>
                                                      </ul>

                                                      <div class="tab-content">


                                                         <!-- Add Product Tab -->
                                                        <div id="menu1" class="tab-pane fade in active">
                                                          <table class="table table-responsive table-hover">
                                                          <form method="POST" action="fileupload.php" enctype="multipart/form-data">

                                                            <tr>
                                                            <th style="text-align: right;" hidden> ProductID:</th>
                                                            <td> <input type="text" name="productID" value="<?php echo date("Y.m.d") .date("h:i:sa");  ?>" hidden> </td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Product Name:</th>
                                                            <td> <input type="text" name="productname" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;" required> Choose Category:</th>
                                                            <td>
                                                                <select class="input-select" name="category">
                                                                <option value="B.I. & G.I. Pipes">B.I. & G.I. Pipes <hr></option>

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
                                                            <td> <input type="file" name="image" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Principal Price:</th>
                                                            <td> <input type="number" name="principalprice" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Selling Price:</th>
                                                            <td> <input type="number" name="sellingprice" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> In-stock:</th>
                                                            <td> <input type="number" name="instock" required></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Description:</th>
                                                            <td> <textarea name="description" rows="5" cols="40" placeholder="Describe your product..."  required></textarea></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Details:</th>
                                                            <td> <textarea name="details" rows="5" cols="40" placeholder="Let the user know what's on this product..." required></textarea></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Additional Info (Optional):</th>
                                                            <td> <textarea name="additionalinfo" rows="5" cols="40" placeholder="Add additional info if in case you think there is a need of elaboration..."></textarea></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"> Available in:</th>
                                                            <td> <textarea name="availablein" rows="5" cols="40" placeholder="Cite availabilities of the product (example: color, size, and etc.)" required></textarea></td>
                                                            </tr>

                                                            <tr>
                                                            <th style="text-align: right;"></th>
                                                            <td> <button type="submit" name="newproduct" class="primary-btn">Save</button> </td>
                                                            </tr>


                                                            </form>
                                                            </table>
                                                        </div>
                                                        <!-- /Add Product Tab -->


                                                        <!-- home tab -->
                                                        <div id="home" class="tab-pane fade">

                                                          <br>
                                                           <input type="text" name=""  placeholder="Enter Customer ID..." style="width: 250px;">
                                                          <span><h5>Juan Dela Cruz</h5></span>

                                                          <br><br>
                                                          <form>
                                                            <select class="input-select" >
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
                                                            <span>
                                                            <select class="input-select">
                                                                <option value="">Product Name</option>
                                                                <?php
                                                                $sql = "SELECT * FROM productstbl";
                                                                $result = mysqli_query($con, $sql);

                                                                if (mysqli_num_rows($result) > 0) {
                                                                  while($row = mysqli_fetch_assoc($result)) {
                                                                 ?>
                                                                <option value="<?php echo $row['productname'] ?>"><?php echo $row['productname'] ?></option>
                                                              <?php }
                                                            } ?>
                                                            </select>
                                                            </span>

                                                            <span>
                                                                Qty:
                                                                <input type="number" name=""  value="1" min="1" style="width: 50px;">
                                                            </span>
                                                            <span>
                                                                <button class="primary-btn"> ADD </button>
                                                            </span>

                                                        </form>

                                                        <hr>

                                                        <div class="col-md-12">


                                                    <table class="table table-responsive table-hover">
                                                       <tr style="background-color: #E4E7ED;">
                                                         <th style="text-align: left;">Product</th>
                                                         <th style="text-align: left;"> Quantity </th>
                                                         <th style="text-align: left;"> Unit Price </th>
                                                         <th style="text-align: left;"> Total </th>
                                                         <th style="text-align: left;"> Action </th>
                                                       </tr>
                                                       <?php
                                                       $sql = "SELECT productname,instock,sellingprice,sellingprice*instock as 'total' FROM productstbl";
                                                       $result = mysqli_query($con, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                         // output data of each row
                                                         while($row = mysqli_fetch_assoc($result)) { ?>
                                                       <tr>
                                                         <td> <?php echo $row['productname'] ?> </td>
                                                         <td> <?php echo $row['instock'] ?> </td>
                                                         <td> <?php echo $row['sellingprice'] ?> </td>
                                                         <td> <?php echo $row['total'] ?> </td>
                                                         <td> <button type="submit" value="" class="btn btn-danger"> <span><i class="fa fa-trash"></i></span> Delete </button></td>
                                                        </tr>
                                                      <?php }
                                                      } ?>
                                                        <tfooter>
                                                        <tr style="background-color: #E4E7ED;">
                                                         <th style="text-align: left;"></th>
                                                         <th style="text-align: left;">  </th>
                                                         <th style="text-align: right;"> Total Amount Due: </th>
                                                         <?php
                                                         $sql = "SELECT sum(sellingprice*instock) as 'total' FROM productstbl";
                                                         $result = mysqli_query($con, $sql);
                                                         $row = mysqli_fetch_assoc($result) ?>
                                                         <th style="text-align: left;"> ₱ <?php echo $row['total'] ?> </th>
                                                         <th style="text-align: left;">
                                                            <a href="admininvoicegenerate.php">
                                                            <button type="submit" value="" class="btn btn-info" style="width: 80px;"> <span><i class="fa fa-buy"></i></span> GO </button>
                                                            </a>
                                                        </th>

                                                       </tr>
                                                       </tfooter>

                                                    </table>


                                                </div>

                                                        </div>
                                                        <!-- /home tab -->

                                                       

                                                        <!-- List of Products -->
                                                        <div id="menu2" class="tab-pane fade">
                                                          <div class="col-md-8">

                                                              <h2>Categories</h2>

                                                              <!-- Category1 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category1">BI & GI Pipes</button><br>
                                                              <div></div>
                                                              <div id="category1" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='B.I. & G.I. Pipes' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category1 -->
                                                            <hr>
                                                            <!-- Category2 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category2">Plain & Deformed Bar</button><br>
                                                              <div id="category2" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Plain & Deformed Bar' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category2 -->
                                                            <hr>
                                                            <!-- Category3 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category3">Welding Rod</button><br>
                                                              <div id="category3" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Welding Rod' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category3 -->
                                                            <hr>
                                                            <!-- Category4 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category4">Plain G.I. Sheets</button><br>
                                                              <div id="category4" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Plain G.I. Sheets' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category4 -->
                                                            <hr>
                                                            <!-- Category5 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category5">Handles & Hinges</button><br>
                                                              <div id="category5" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Handles & Hinges' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category5 -->
                                                            <hr>
                                                            <!-- Category6 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;"data-toggle="collapse" data-target="#category6">Square & Section Bars</button><br>
                                                              <div id="category6" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Square & Section Bars' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category6 -->
                                                            <hr>
                                                            <!-- Category7 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category7">Channels</button><br>
                                                              <div id="category7" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Channels' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</
                                                                                button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category7 -->
                                                            <hr>
                                                            <!-- Category8 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category8">Flat & Angle Bars</button><br>
                                                              <div id="category8" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Flat & Angle Bars' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category8 -->
                                                            <hr>
                                                            <!-- Category9 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category9">Mild Steel Plates</button><br>
                                                              <div id="category9" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Mild Steel Plates' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category9 -->
                                                            <hr>
                                                            <!-- Category10 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;" data-toggle="collapse" data-target="#category10">Roofing</button><br>
                                                              <div id="category10" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='Roofing' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category10 -->
                                                            <hr>
                                                            <!-- Category11 -->
                                                              <button type="button" class="primary-btn" style=" width: 250px; text-align: left;"data-toggle="collapse" data-target="#category11">BI & GI Tubulars</button><br>
                                                              <div id="category11" class="collapse">
                                                                <br>
                                                                <table class="table table-responsive table-hover">
                                                                  <tr>
                                                                      <th>ProductName</th>
                                                                      <th>Image</th>
                                                                      <th colspan="2">ACTION</th>
                                                                  </tr>

                                                                  <?php

                                                                  $listq=mysqli_query($con, "SELECT `productID`, `productname`, `image` from `productstbl` where `category`='B.I. & G.I. Tubulars' ");
                                                                  while($listf=mysqli_fetch_assoc($listq)){

                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $listf['productname']; ?></td>
                                                                      <td><img src="<?php  echo $listf['image']; ?>" width="50px" alt=""></td>
                                                                      <td>
                                                                        <a href="adminproductupdate.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-info">UPDATE</button>
                                                                        </a>
                                                                      </td>
                                                                      <td>
                                                                        <a href="adminproductdelete.php?productID='<?php  echo $listf['productID']; ?>' " >
                                                                            <button class="btn btn-danger">DELETE</button>
                                                                        </a>
                                                                      </td>
                                                                  </tr>
                                                                  <?php } ?>


                                                                </table>
                                                            </div>
                                                            <!-- /Category11 -->


                                                          </div>

                                                        </div>
                                                        <!-- /List of Products -->

                                                        <!--
                                                        <div id="menu3" class="tab-pane fade">
                                                          <h3>Menu 3</h3>
                                                          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                      </div>
                                                    -->


                                                </div>


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
