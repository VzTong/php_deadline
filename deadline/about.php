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
										<a href="kitchen.php"><img src="<?php asset("images/me.png") ?>" class="img-responsive" alt=""></a>
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
		<h3>About</h3>
		<h4><a href="index.php">Home</a><label>/</label>About</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- faqs -->
<div class="about-w3 ">


	<!--about-->
	<div class="container">
		<div class="about">
			<div class="spec ">
				<h3>About</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>

			<div class="col-md-4 about-right">
				<img class="img-responsive" src="<?php asset("images/ab.jpg") ?>" alt="">
			</div>
			<div class="col-md-4 about-left">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere. Praesent odio sem. </p>
			</div>
			<div class="col-md-4 about-right">
				<img class="img-responsive" src="<?php asset("images/ab1.jpg") ?>" alt="">
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//about-->

	<!--work-experience-->
	<div class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3>Our Journey</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class="work-info">
				<div class="col-md-6 work-left">
					<div class=" work-w3 ">
						<h5> May 2012</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right">
					<div class=" work-w31">
						<h5> November 2012</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2012</span>
			</div>
			<div class="work-info">
				<div class="col-md-6 work-left">
					<div class=" work-w3 ">
						<h5> June 2013</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right">
					<div class=" work-w31">
						<h5>December 2013</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2013</span>
			</div>
			<div class="work-info">
				<div class="col-md-6 work-left">
					<div class=" work-w3 ">
						<h5> April 2014</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right">
					<div class=" work-w31">
						<h5> August 2014</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2014</span>
			</div>
			<div class="work-info">
				<div class="col-md-6 work-left">
					<div class=" work-w3 ">
						<h5> February 2015</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right">
					<div class=" work-w31">
						<h5> July 2015</h5>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2015</span>
				<span class="last"> 2016</span>
			</div>
		</div>
	</div>
	<!--//work-experience-->
	<!--advantages-->
	<div class="container">
		<div class="advantages">
			<div class="col-md-6 advantages-left ">
				<h3>Our Advantages</h3>
				<div class="advn-one">
					<div class="ad-mian">
						<div class="ad-left">
							<p>1</p>
						</div>
						<div class="ad-right">
							<h4><a href="single.php">Elacus a porta varius dui</a></h4>
							<p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="ad-mian">
						<div class="ad-left">
							<p>2</p>
						</div>
						<div class="ad-right">
							<h4><a href="single.php">Elacus a porta varius dui</a></h4>
							<p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="ad-mian">
						<div class="ad-left">
							<p>3</p>
						</div>
						<div class="ad-right">
							<h4><a href="single.php">Elacus a porta varius dui</a></h4>
							<p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 advantages-left about-agi">
				<h3>Our Skills</h3>
				<div class="advn-two">
					<h4><a href="single.php"> eu tincidunt lacinia, elit quam ultri ces ipsum, quis ultricies ipsum ante</a></h4>
					<p>Donec sagittis interdum tellus sed bibendum. Aen ean fringilla ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac rhoncus libero.</p>
					<ul>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Praesent vestibulum molestie lacus</a></li>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Donec sagittis interdum tellus</a></li>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Nulla consectetur adipiscing</a></li>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Donec ac rhoncus libero.</a></li>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Erci eu tincidunt lacinia</a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--advantages-->

</div>
<!-- // Terms of use -->

<!--footer-->
<!-- //footer-->

<?php include("_footer.php") ?>