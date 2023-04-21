<!-- smooth scrolling -->
<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<script src="<?php asset("js/bootstrap.js") ?>"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php asset("js/jquery.mycart.js") ?>"></script>
<script type="text/javascript">
  $(function() {

    var goToCartIcon = function($addTocartBtn) {
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
        "position": "fixed",
        "z-index": "999"
      });
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500, "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function() {
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart) {
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function() {
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
</script>


<!--footer-->
<div class="footer">
  <div class="container">
    <div class="col-md-3 footer-grid">
      <h3>About Us</h3>
      <p>Nam libero tempore, cum soluta nobis est eligendi
        optio cumque nihil impedit quo minus id quod maxime
        placeat facere possimus.</p>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Menu</h3>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="kitchen.php">Kitchen</a></li>
        <li><a href="care.php">Personal Care</a></li>
        <li><a href="hold.php">Household</a></li>
        <li><a href="#">Short Codes</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Customer Services</h3>
      <ul>
        <li><a href="shipping.php">Shipping</a></li>
        <li><a href="terms.html">Terms & Conditions</a></li>
        <li><a href="faqs.php">Faqs</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="offer.php">Online Shopping</a></li>

      </ul>
    </div>
    <div class="col-md-3 footer-grid">
      <h3>My Account</h3>
      <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="wishlist.php">Wishlist</a></li>

      </ul>
    </div>
    <div class="clearfix"></div>
    <div class="footer-bottom">
      <h2><a href="index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
      <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
      <ul class="social-fo">
        <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
        <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
      </ul>
      <div class=" address">
        <div class="col-md-4 fo-grid1">
          <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
        </div>
        <div class="col-md-4 fo-grid1">
          <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
        </div>
        <div class="col-md-4 fo-grid1">
          <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
        </div>
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
</div>
<!-- //footer-->
</body>

</html>