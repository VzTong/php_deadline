<?php
include("../include/common.php");
check_login();

$id = $_GET["id"] ?? -1;

if (is_method_get()) {
	$sql = "select * from product where id_product=?";
	$data = db_select($sql, [$id]);

	$data = $data[0];
} else if (is_method_post()) {
	//Cập nhật dữ liệu

	$name_product = $_POST["name_product"] ?? "";

	$heft_product = $_POST["heft_product"] ?? "";

	$price_old_product = $_POST["price_old_product"] ?? "";

	$price_new_product = $_POST["price_new_product"] ?? "";

	$data_type = $_POST["data_type"] ?? "";

	$details_product  = $_POST["details_product"] ?? "";

	$img_product = upload_and_return_filename("img_product", "product/img_product");

	if (empty($img_path)) {
		$sql = "update product set name_product=?, heft_product=?, price_old_product=?, price_new_product=?, data_type=?, details_product=?,img_product=?
        where id_product=?";

		$params = [$name_product, $heft_product, $price_old_product, $price_new_product, $data_type, $details_product, $img_product, $id];
		db_execute($sql, $params);
		js_redirect_to("admin.php"); //Chuyển hướng về trang chủ
		die;
	} else {
		$sql1 = "update product set name_product=?, heft_product=?, price_old_product=?, price_new_product=?, data_type=?, details_product=?
		where id_product=?";

		$params1 = [$name_product, $heft_product, $price_old_product, $price_new_product, $data_type, $details_product, $id];
		db_execute($sql1, $params1);
		js_redirect_to("admin.php");
		die;
	}


	// js_alert("Cập nhật thành công");

	js_redirect_to("admin.php");
}


$_title = "Edit Product information";
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
											<li><a href="../care.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>

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
</div> <!---->
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Edit Product</h3>
		<h4><a href="../index.php">Home</a><label>/</label>Edit Product</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

<div class="login">

	<div class="main-agileits">
		<div class="form-w3agile">
			<h3>Edit Product</h3>
			<form method="post" enctype="multipart/form-data" autocomplete="off">

				<?php
				if (!empty($data["img_product"])) { ?>
					<img src="<?php upload($data["img_product"]); ?>" alt="" class="box img">
					<br />
				<?php } ?>

				<label>Name Product:</label>
				<div class="key">
					<i class="fa-solid fa-input-text"></i>
					<input type="text" id="name_product" name="name_product" require value="<?php echo $data["name_product"]; ?>">
					<div class="clearfix"></div>
				</div>

				<label>Heft Product:</label>
				<div class="box">
					<i class="fa-solid fa-input-text"></i>
					<input class="box text" type="text" id="heft_product" name="heft_product" require value="<?php echo $data["heft_product"]; ?>">
					<div class="clearfix"></div>
				</div>


				<label>Price Old Product ( $)</label>
				<div class="box">
					<input class="box text" type="floatval" id="price_old_product" name="price_old_product" require value="<?php echo $data["price_old_product"]; ?>">
					<div class="clearfix"></div>
				</div>

				<label>Price New Product( $)</label>
				<div class="box">
					<input class="box text" type="floatval" id="price_new_product" name="price_new_product" require value="<?php echo $data["price_new_product"]; ?>">
					<div class="clearfix"></div>
				</div>

				<label>Data Type</label>
				<div class="box">
					<select class="box text" id="data_type" name="data_type">

						<?php
						gen_option_ele("product", "data_type", "data_type", $data["data_type"]);
						?>

					</select>
					<div class="clearfix"></div>
				</div>

				<label>Details Product </label>
				<div class="key">
					<input type="text" id="details_product" name="details_product" require value="<?php echo $data["details_product"]; ?>">
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