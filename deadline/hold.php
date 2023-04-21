<?php

include("include/common.php");
include("_header.php");

$data = db_select("SELECT * FROM product where data_type = 'Household'");

?>

<a href="offer.php"><img src="<?php asset("images/download.png") ?>" class="img-head" alt=""></a>
<div class="header">

	<div class="container">

		<div class="logo">
			<h1><a href="index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
		</div>
		<div class="head-t">
			<ul class="card">
				<li><a href="wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
				<?php if (is_logged()) { ?>

					<li><a href="logout.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Log Out</a></li>

				<?php } else { ?>

					<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>

				<?php } ?>
				<li><a href="about.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
				<li><a href="shipping.php"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
			</ul>
		</div>

		<div class="header-ri">
			<ul class="social-top">
				<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
				<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
				<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
				<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
			</ul>
		</div>


		<div class="nav-top">
			<nav class="navbar navbar-default">

				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>


				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="index.php" class="hyper "><span>Home</span></a></li>

						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Kitchen<b class="caret"></b></span></a>
							<ul class="dropdown-menu multi">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">

											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
											<li><a href="kitchen.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
											<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>

										</ul>
									</div>
									<div class="col-sm-3 w3l">
										<a href="kitchen.php"><img src="<?php asset("images/me.png") ?>" class="img-responsive" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li class="dropdown ">

							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> Personal Care <b class="caret"></b></span></a>
							<ul class="dropdown-menu multi multi1">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="care.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
											<li><a href="care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>

										</ul>
									</div>
									<div class="col-sm-3 w3l">
										<a href="care.php"><img src="<?php asset("images/me1.png") ?>" class="img-responsive" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li class="dropdown active active1">
							<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>Household<b class="caret"></b></span></a>
							<ul class="dropdown-menu multi multi2">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
											<li><a href="hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>

										</ul>
									</div>
									<div class="col-sm-3 w3l">
										<a href="hold.php"><img src="<?php asset("images/me2.png") ?>" class="img-responsive" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>

						<li><a href="admin.php" class="hyper"> <span>Admin</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
			<div class="cart">

				<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
</div>
<!---->
<!--	ki6 - ki7 - k8 // of48 -> of59 -->
<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<a href="care.php"><img class="first-slide" src="<?php asset("images/ba2.jpg") ?>" alt="First slide"></a>

		</div>
		<div class="item">
			<a href="care.php"><img class="second-slide " src="<?php asset("images/ba.jpg") ?>" alt="Second slide"></a>

		</div>
		<div class="item">
			<a href="hold.php"> <img class="third-slide " src="<?php asset("images/ba1.jpg") ?>" alt="Third slide"></a>

		</div>
	</div>

</div><!-- /.carousel -->

<!--content-->
<div class="kic-top ">
	<div class="container ">
		<div class="kic ">
			<h3>Popular Categories</h3>

		</div>
		<div class="col-md-4 kic-top1">
			<a href="single.php">
				<img src="<?php asset("images/ki6.jpg") ?>" class="img-responsive" alt="">
			</a>
			<h6>Clips</h6>
			<p>Nam libero tempore</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="single.php">
				<img src="<?php asset("images/ki7.jpg") ?>" class="img-responsive" alt="">
			</a>
			<h6>Cleaning Wear</h6>
			<p>Nam libero tempore</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="single.php">
				<img src="<?php asset("images/ki8.jpg") ?>" class="img-responsive" alt="">
			</a>
			<h6>Toothbrush</h6>
			<p>Nam libero tempore</p>
		</div>
	</div>
</div>

<!--content-->
<div class="product">
	<div class="container">
		<div class="spec ">
			<h3>Products</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
		<div class=" con-w3l agileinf">
			<?php


			foreach ($data as $item){
                $id = $item["id_product"];

                $name_product = $item["name_product"];

                $heft_product = $item["heft_product"];

                $price_old_product = $item["price_old_product"];

                $price_new_product = $item["price_new_product"];

                $data_type = $item["data_type"];

                $details_product  = $item["details_product"];

                $img_product = upload($item["img_product"] ?? "", true); // url --> img
				echo <<<KEY_WORLD
			<div class="col-md-3 pro-1">
				<div class="col-m">
					<a href="#" data-toggle="modal" data-target="#myModal$id" class="offer-img">
						<img src="$img_product" class="img-responsive" alt="">
					</a>
					<div class="mid-1">
						<div class="women">
							<h6><a href="single.php">$name_product</a> (250 g)</h6>
						</div>
						<div class="mid-2">
							<p><label>$$price_old_product</label><em class="item_price">$$price_new_product</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="$id" data-name="$name_product" data-summary="summary $id" data-price="$price_new_product" data-quantity="1" data-image="$img_product">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
KEY_WORLD;}
			?>

			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!--footer-->
<!-- //footer-->

<!-- product -->
<?php
foreach ($data as $item) {
  $id = $item["id_product"];

  $name_product = $item["name_product"];

  $heft_product = $item["heft_product"];

  $price_old_product = $item["price_old_product"];

  $price_new_product = $item["price_new_product"];

  $data_type = $item["data_type"];

  $details_product  = $item["details_product"];

  $img_product = upload($item["img_product"] ?? "", true); // url --> img

  echo <<<KEY_WORLD

  <div class="modal fade" id="myModal$id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-info">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body modal-spa">
          <div class="col-md-5 span-2">
            <div class="item">
              <img src="$img_product" class="img-responsive" alt="">
            </div>
          </div>
          <div class="col-md-7 span-1 ">
            <h3>$name_product ($heft_product)</h3>
            <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
            <div class="price_single">
              <span class="reducedfrom "><del>$$price_old_product </del>$$price_new_product</span>

              <div class="clearfix"></div>
            </div>
            <h4 class="quick">Quick Overview:</h4>
            <p class="quick_desc">$details_product</p>
            <div class="add-to">
              <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="$id" data-name="$name_product" data-summary="summary $id" data-price="1.50" data-quantity="1" data-image="$img_product">Add to Cart</button>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>

KEY_WORLD;
}?>



<?php include("_footer.php") ?>