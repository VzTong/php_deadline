<?php
include("../include/common.php");
check_login();

if (is_method_post()) {
	//upload

	$name_product = $_POST["name_product"] ?? "";

	$heft_product = $_POST["heft_product"] ?? "";

	$price_old_product = $_POST["price_old_product"] ?? "";

	$price_new_product = $_POST["price_new_product"] ?? "";

	$data_type = $_POST["data_type"] ?? "";

	$details_product  = $_POST["details_product"] ?? "";

	$img_product = upload_and_return_filename("img_product", "product/img_product");

	//dùng filename nhận được để lưu vào db
	$sql = "insert into product (name_product, heft_product,
	price_old_product, price_new_product, data_type, details_product, img_product)
    values(?,?,?,?,?,?,?)";

	// $insert_success = db_execute($sql, [$name_product, $heft_product,$price_old_product, $price_new_product, $data_type, details_product, $img_product]);

	$params = [$name_product, $heft_product, $price_old_product,
	$price_new_product, $data_type, $details_product, $img_product];
	db_execute($sql, $params);

	js_redirect_to("admin.php");
}

$_title = "Create a new product";
include("../_header.php");

?>

<a href="../offer.php"><img src="<?php asset("images/download.png") ?>" class="img-head" alt=""></a>
<div class="header">

	<div class="container">

		<div class="logo">
			<h1><a href="../index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
		</div>
		<div class="head-t">
			<ul class="card">
				<li><a href="../wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
				<?php if (is_logged()) { ?>

					<li><a href="../logout.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Log Out</a></li>

				<?php } else { ?>

					<li><a href="../login.php"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="../register.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>

				<?php } ?>
				<li><a href="../about.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
				<li><a href="../shipping.php"><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
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
						<li><a href="../index.php" class="hyper "><span>Home</span></a></li>

						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown"><span>Kitchen<b class="caret"></b></span></a>
							<ul class="dropdown-menu multi">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">

											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
											<li><a href="../kitchen.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
											<li><a href="../kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>

										</ul>
									</div>
									<div class="col-sm-3 w3l">
										<a href="../kitchen.php"><img src="<?php asset("images/me.pn") ?>" class="img-responsive" alt=""></a>
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
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="../care.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin ../care.phpcare</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>

										</ul>
									</div>
									<div class="col-sm-3 w3l">
										<a href="../care.php"><img src="<?php asset("images/me1.png") ?>" class="img-responsive" alt=""></a>
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
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>

										</ul>

									</div>
									<div class="col-sm-3">

										<ul class="multi-column-dropdown">
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
											<li><a href="../hold.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>

										</ul>
									</div>
									<div class="col-sm-3 w3l">
										<a href="../hold.php"><img src="<?php asset("images/me2.png") ?>" class="img-responsive" alt=""></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>

						<li><a href="../admin.php" class="hyper"> <span>Admin</span></a></li>
						<li><a href="../contact.php" class="hyper"><span>Contact Us</span></a></li>
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
		<h3>Add Product</h3>
		<h4><a href="../index.php">Home</a><label>/</label>Add Product</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

<div class="login">

	<div class="main-agileits">
		<div class="form-w3agile">
			<h3>Add Product</h3>
			<form enctype="multipart/form-data" method="post">
				<label>Name Product:</label>
				<div class="key">
					<input type="text" id="name_product" name="name_product" autocomplete="off" placeholder="ex: Name Product"  require>
					<div class="clearfix"></div>
				</div>
				<label>Heft Product:</label>
				<div class="box">
					<i class="fa-solid fa-input-text"></i>
					<input class="box text" type="text" id="heft_product" name="heft_product" placeholder="ex: 10 g; 1 kg; 1 pack;..."  require>
					<div class="clearfix"></div>
				</div>

				<label>Price Old Product</label>
				<div class="box">
					<input class="box text" type="floatval" id="price_old_product" name="price_old_product" placeholder="ex: 1$" require>
					<div class="clearfix"></div>
				</div>

				<label>Price New Product</label>
				<div class="box">
					<input class="box text" type="floatval" id="price_new_product" name="price_new_product" placeholder="ex: 1$" require>
					<div class="clearfix"></div>
				</div>

				<label>Data Type</label>
				<div class="box">
					<select class="box text" id="data_type" name="data_type">

						<option value="">default</option>
						<option value="Special Offer">Special Offer</option>
						<option value="Personal Care">Personal Care</option>
						<option value="Household">Household</option>
						<option value="Kitchen">Kitchen</option>

					</select>
					<div class="clearfix"></div>
				</div>

				<label>Details Product </label>
				<div class="key">
					<input type="text" id="details_product" name="details_product" placeholder="ex: details product...... " require autocomplete="off">
					<div class="clearfix"></div>
				</div>

				<label>Chooses Image Product</label>
				<div class="box">
					<input class="box text img" type="file" id="img_product" name="img_product" accept=".png, .jpg, .jpeg" /></br>
					<div class="clearfix"></div>
				</div>

				<input type="submit" value="Add">
			</form>
		</div>
	</div>
</div>
<!--footer-->
<!-- //footer-->

<?php include("../_footer.php") ?>