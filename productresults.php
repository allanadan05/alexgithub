<div id="showstore">

						<!-- store TOP filter -->
			<div class="store-filter clearfix">
              <?php
              $sql = "SELECT count(productID) as 'count' FROM productstbl";
              $result = mysqli_query($con, $sql);
              $showing = mysqli_fetch_assoc($result);
               ?>
				<span class="store-qty">Showing <?php echo $showing['count']; ?> products</span>
			</div>
						<!-- /store TOP filter -->

			<!-- store products -->
			<div class="row">

              <?php
              $sql = "SELECT * FROM productstbl";
              $result = mysqli_query($con, $sql);

              if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
              ?>
              <!-- product -->

						<div class="col-md-4 col-xs-6">
							<div class="product">

								<div class="product-img">
									<img src="<?php  echo $row['image']; ?>" alt="" height="224px">
								</div>

								<div class="product-body">
									<p class="product-category"><?php  echo $row['category']; ?></p>
									<h3 class="product-name"><a href="#"><?php  echo $row['productname']; ?></a></h3>
									<h4 class="product-price"> <?php  echo $row['sellingprice']; ?> <del class="product-old-price"> <?php  echo $row['principalprice']; ?> </del></h4>
								</div>

								<div class="add-to-cart">
									<button class="add-to-cart-btn" onclick="addtocart(<?php echo $row['pid']; ?>)"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
						</div>
						<!-- /product -->
					<?php }
						}
					?>
				</div>
				<!-- /store products -->
				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<span class="store-qty">Showing <?php echo $showing['count']; ?> products</span>
				</div>
				<!-- /store bottom filter -->
					</div>   <!-- /div id=showstore -->