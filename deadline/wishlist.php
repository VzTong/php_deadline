<?php

include("include/common.php");
include("_header.php");
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
										<a href="kitchen.php"><img src="<?php asset("images/me.pn") ?>" class="img-responsive" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li class="dropdown">

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
						<li class="dropdown">
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

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Wishlist</h3>
		<h4><a href="index.php">Home</a><label>/</label>Wishlist</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="check-out">
	<div class="container">
		<div class="spec ">
			<h3>Wishlist</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
		<script>
			$(document).ready(function(c) {
				$('.close1').on('click', function(c) {
					$('.cross').fadeOut('slow', function(c) {
						$('.cross').remove();
					});
				});
			});
		</script>
		<script>
			$(document).ready(function(c) {
				$('.close2').on('click', function(c) {
					$('.cross1').fadeOut('slow', function(c) {
						$('.cross1').remove();
					});
				});
			});
		</script>
		<script>
			$(document).ready(function(c) {
				$('.close3').on('click', function(c) {
					$('.cross2').fadeOut('slow', function(c) {
						$('.cross2').remove();
					});
				});
			});
		</script>
		<table class="table ">
			<tr>
				<th class="t-head head-it ">Products</th>
				<th class="t-head">Price</th>
				<th class="t-head">Quantity</th>

				<th class="t-head">Purchase</th>
			</tr>
			<tr class="cross">
				<td class="ring-in t-data">
					<a href="single.php" class="at-in">
						<img src="<?php asset("images/wi.png") ?>" class="img-responsive" alt="">
					</a>
					<div class="sed">
						<h5>Sed ut perspiciatis unde</h5>
					</div>
					<div class="clearfix"> </div>
					<div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
				</td>
				<td class="t-data">$10.00</td>
				<td class="t-data">
					<div class="quantity">
						<div class="quantity-select">
							<div class="entry value-minus">&nbsp;</div>
							<div class="entry value"><span class="span-1">1</span></div>
							<div class="entry value-plus active">&nbsp;</div>
						</div>
					</div>

				</td>

				<td class="t-data t-w3l"><a class=" add-1" href="single.php">Add To Cart</a></td>

			</tr>
			<tr class="cross1">
				<td class="t-data ring-in"><a href="single.php" class="at-in"><img src="<?php asset("images/wi1.png") ?>" class="img-responsive" alt=""></a>
					<div class="sed">
						<h5>Sed ut perspiciatis unde</h5>
					</div>
					<div class="clearfix"> </div>
					<div class="close2"> <i class="fa fa-times" aria-hidden="true"></i></div>
				</td>
				<td class="t-data">$20.00</td>
				<td class="t-data">
					<div class="quantity">
						<div class="quantity-select">
							<div class="entry value-minus">&nbsp;</div>
							<div class="entry value"><span class="span-1">1</span></div>
							<div class="entry value-plus active">&nbsp;</div>
						</div>
					</div>

				</td>

				<td class="t-data t-w3l"><a class=" add-1" href="single.php">Add To Cart</a></td>

			</tr>
			<tr class="cross2">
				<td class="t-data ring-in"><a href="single.php" class="at-in"><img src="<?php asset("images/wi2.png") ?>" class="img-responsive" alt=""></a>
					<div class="sed">
						<h5>Sed ut perspiciatis unde</h5>
					</div>
					<div class="clearfix"> </div>
					<div class="close3"> <i class="fa fa-times" aria-hidden="true"></i></div>
				</td>
				<td class="t-data">$15.00</td>
				<td class="t-data">
					<div class="quantity">
						<div class="quantity-select">
							<div class="entry value-minus">&nbsp;</div>
							<div class="entry value"><span class="span-1">1</span></div>
							<div class="entry value-plus active">&nbsp;</div>
						</div>
					</div>

				</td>

				<td class="t-data"><a class=" add-1" href="single.php">Add To Cart</a></td>

			</tr>
		</table>
	</div>
</div>

<!--quantity-->
<script>
	$('.value-plus').on('click', function() {
		var divUpd = $(this).parent().find('.value'),
			newVal = parseInt(divUpd.text(), 10) + 1;
		divUpd.text(newVal);
	});

	$('.value-minus').on('click', function() {
		var divUpd = $(this).parent().find('.value'),
			newVal = parseInt(divUpd.text(), 10) - 1;
		if (newVal >= 1) divUpd.text(newVal);
	});
</script>
<!--quantity-->


<!--footer-->
<!-- //footer-->
<?php include("_footer.php") ?>