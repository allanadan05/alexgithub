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
					<ul class="header-links pull-right">
						<li><a href="#"><i class="glyphicon-peso">₱</i> PHP</a></li>
						<li><a href="account.php"><i class="fa fa-user-o"></i><text id="username"><?php echo $logacc; ?></text></a></li>
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
								<a href="#" class="logo">
									<img src="./img/AlexSteelSupplyLogoNew.png" alt="LOGO">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select" id="selectedcat" onchange="searchselectedcategory()">
										<option value="0" disabled selected>All Categories</option>
										<?php 
										$sqlselect="select distinct(category) from productstbl";
										$sqlselectexecute=mysqli_query($con, $sqlselect);
										while($category=mysqli_fetch_array($sqlselectexecute)){
									    ?>
										<option value="<?php echo $category['category']; ?>"><?php echo $category['category']; ?></option>
									    <?php } ?>
									</select>
									<input class="input" onkeyup="searchoninput()"  onchange="searchoninput()" onkeyenter id="search-input" placeholder="Search here"  autofocus="">
									<button type="button" class="search-btn" onclick="searchoninput();">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Cart -->
                <div class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Your Cart</span>

                    <?php
                    $sql = "SELECT count(pid) as 'items', sum(sellingprice * quantity) as 'total' FROM carttbl where myaccountID ='$myaccoundID'";
										$result = mysqli_query($con, $sql);
										$row5 = mysqli_fetch_assoc($result);
										$qty = 0;
                     ?>
										 
                    <div id="showQty" class="qty" > <?php echo ($row5['items']+0) ?> </div>
                  </a>
                  <div class="cart-dropdown">
                    <div class="cart-list" id="cartresponse">
                      <?php
                      $sql = "SELECT * FROM carttbl inner join productstbl on carttbl.pid = productstbl.pid where myaccountID = '$myaccoundID'";
                      $result = mysqli_query($con, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <div class="product-widget">
                        <div class="product-img">
                          <img src="<?php echo $row['image'] ?>" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#"><?php echo $row['productname'] ?></a></h3>
                          <h4 class="product-price"><span class="qty"> <?php echo $row['quantity']; ?>x </span> ₱ <?php echo $row['total'] ?> </h4>
                        </div>
                        <button onclick="deleteoncart(<?php echo $row['ID'] ?>)" class="delete"><i class="fa fa-close"></i></button>
                      </div>
                    <?php }
                  } ?>
                    </div>
                    <div class="cart-summary">
                        <small id="selectedItem"><?php echo ($row5['items']+0) ?> Item(s) selected</small>
                      <h5 id="subtotal">SUBTOTAL: ₱ <?php echo ($row5['total']+0)  ?></h5>
                    </div>
                    <div class="cart-btns">
                      <a href="cart.php">View Cart</a>
                      <a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		