
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>App Store</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>A</span>pp
						<span>S</span>tore
						<img src="images/logo2.png" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="app_retrieve.php" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="AppReview" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Review The App</h3>
						<form action="addreview.php" method="post">
							<?php
								$var = 'WhatsApp';
								$con = mysqli_connect("localhost","root","","appstore");
								if (!$con)
								{
									die('Could not connect: ' . mysql_error());
								}
							mysqli_close($con);
							?>	
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Title" name="Title" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Review" name="Review" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Rating" name="Rating" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="Registered Email" name="Email" required="">
							</div>
							<input type="submit" value="Review" name = "WhatsApp">
						</form>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" required="">
						<option value="">All Categories</option>
						<option value="Kitchen">Art & Design</option>
						<option value="Household">Beauty</option>
						<option value="Snacks &amp; Beverages">Books</option>
						<option value="Personal Care">Business</option>
						<option value="Gift Hampers">Comics</option>
						<option value="Fruits &amp; Vegetables">Education</option>
						<option value="Baby Care">Entertainment</option>
						<option value="Soft Drinks &amp; Juices">Family</option>
						<option value="Frozen Food">Food & Drinks</option>
						<option value="Bread &amp; Bakery">Games</option>
						<option value="Sweets">Health & Fitness</option>
						<option value="Sweets">Maps</option>
						<option value="Sweets">Music & Audio</option>
						<option value="Sweets">Photography</option>
						<option value="Sweets">Shopping</option>
						<option value="Sweets">Sports</option>
						<option value="Sweets">Weather</option>
					</select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li>
									<a class="nav-stylehead" href="index.html">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.html">About Us</a>
								</li>
								<li>
									<a class="" href="contact.html">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Single Page</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							
						<?php
							$con = mysqli_connect("localhost","root","","appstore");
							
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
				  
							
							$sql = "select App_Screenshots from appinfo ai join application a on ai.App_ID = a.App_ID where App_Name='WhatsApp'";
							$result = mysqli_query($con,$sql);
							if(mysqli_error($con)){
								printf("error: %s\n", mysqli_error($con));
							}
													
							while ($row_category = mysqli_fetch_array($result)){	
							$var = $row_category['App_Screenshots'];						
							
							echo "<img src = $var align= 'left' />"; 
							
							}	
						mysqli_close($con);
						?>	
						
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
			<?php
			
				$con = mysqli_connect("localhost","root","","appstore");
				if (!$con)
				  {
				  die('Could not connect: ' . mysql_error());
				  }
				  
				  
				$sql = "SELECT * FROM `appinfo` ai join application a on a.App_ID = ai.App_ID where App_Name='WhatsApp'";
				$sql2 = "SELECT DevName,Rating FROM `developer` d join application a on d.Dev_ID = a.Dev_ID join review r on a.App_ID = r.App_ID where a.App_Name = 'WhatsApp'";
				
				$result = mysqli_query($con,$sql);
				$result2 = mysqli_query($con,$sql2);

				if(mysqli_error($con)){
						printf("error: %s\n", mysqli_error($con));
				}
			
			while ($row_category = mysqli_fetch_array($result)){	
				
				echo "<h3>",$row_category['App_Name'],"</h3>";	
				echo "<form action='#' method='post'>";
				echo 			"<fieldset>";
				echo 			"<a href='#'  style='float:right'>";
				echo				"Download </a>";	
				echo			"</fieldset>";
				echo		"</form>";	
				echo "<h4>","Price : $ ",$row_category['App_Price'],"</h4><br>";
				echo "<p>",$row_category['Description'],"</p>";
			}
			
			while ($row_category = mysqli_fetch_array($result2)){	
				
				echo "Developed by: ",$row_category['DevName'];
				echo "<br><br>";
				echo "Rating : ",$row_category['Rating'];
			}
			
			mysqli_close($con);
			?>
			
				
				<div class="product-single-w3l">
					<br>
					<h3> Application Details </h3>
					<br>
					<ul>
					<?php
						
						$con = mysqli_connect("localhost","root","","appstore");
						if (!$con)
						{
							die('Could not connect: ' . mysql_error());
						}
				  
				  
						$sql = "select * from application where App_Name='WhatsApp'";
						$sql1 = "select * from appinfo where Description='WhatsApp'";
						$result = mysqli_query($con,$sql);
						$result1 = mysqli_query($con,$sql1);
						
						if(mysqli_error($con)){
								printf("error: %s\n", mysqli_error($con));
						}
			
						while ($row_category = mysqli_fetch_array($result)){	
				
							echo "Version: ", $row_category['App_LatestVersion'],"<br><br>";
							echo "Updated On: ", $row_category['LatestVersionRelease_Date'],"<br><br>";
							echo "O.S. Supported: ", $row_category['OS_Supported'],"<br><br>";
							echo "RAM Required: ", $row_category['RAM_Required'],"<br><br>";
						
						}
					mysqli_close($con);
					?>	
			
					</ul>
				</div>
				
            
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="review.php" method="post">
							<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="WhatsApp" />
									<input type="hidden" name="amount" value="0.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" /><br><br>	
							</fieldset>
						</form>
					</div>
					<br><br>
				</div>
				<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Reviews</h3>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
						<?php
						
						$con = mysqli_connect("localhost","root","","appstore");
						if (!$con)
						{
							die('Could not connect: ' . mysql_error());
						}
						$sql = "select Rating,Title, Message,FirstName,LastName from review r join application a on r.App_ID = a.App_ID join user u on r.User_ID =u.User_ID where App_Name = 'WhatsApp'";
						
						$result = mysqli_query($con,$sql);
						
						if(mysqli_error($con)){
								printf("error: %s\n", mysqli_error($con));
						}
						
						while ($row_category = mysqli_fetch_array($result)){	
				
							echo "<div class='men-thumb-item'>";
							
							echo "<h2 align='left'>", $row_category['Title'] ,"</h2>";
							echo "</div>";
							echo "<div class='men-thumb-item'>";
							echo 		"<p style='width: 500px;'>"; 
							echo 			"<img src='images/user.png' alt='' style='float: left ;'>";
							echo  $row_category['Message'];
							echo 		"</p>";		
							echo 	"</div>";
							echo "<div class='item-info-product'>";
							echo "<h4>";
							echo $row_category['FirstName']," ",$row_category['LastName'];
							echo "</h4>";
							echo "<br>";
							echo "Rating : ",$row_category['Rating'];
							echo	  "</div>";
							echo   "</div>";
							echo  "</div>";
						}
						
					mysqli_close($con);
					?>

							
						
						<div class="clearfix"></div>
						<div class="search-hotel">
									<a href=" " >More</a>
									<form action="review.php" method="post">
										<input type="submit" value=" ">
									</form>
						</div>
					</div>
					<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="#" method="post">
							<fieldset>
								<a href="#" data-toggle="modal" data-target="#AppReview">
								Review This App</a>	
							</fieldset>
						</form>
					</div>
					<br><br>
				</div>
			
		</div>
	</div>
			</div>

			</div>
			
			
	<!-- //Single Page -->
	
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<li>
								<a href="product.html">Art & Design</a>
							</li>
							<li>
								<a href="product.html">Beauty</a>
							</li>
							<li>
								<a href="product.html">Books</a>
							</li>
							<li>
								<a href="product2.html">Comics</a>
							</li>
							<li>
								<a href="product.html">Education</a>
							</li>
							<li>
								<a href="product2.html">Entertainment</a>
							</li>
							<li>
								<a href="product2.html">Family</a>
							</li>
							<li>
								<a href="product2.html">Food & Drinks</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="product.html">Games</a>
							</li>
							<li>
								<a href="product.html">Health & Fitness</a>
							</li>
							<li>
								<a href="product.html">Maps</a>
							</li>
							<li>
								<a href="product.html">Music & Audio</a>
							</li>
							<li>
								<a href="product2.html">Photography</a>
							</li>
							<li>
								<a href="product.html">Shopping</a>
							</li>
							<li>
								<a href="product.html">Sports</a>
							</li>
							<li>
								<a href="product.html">Weather</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="about.html">About Us</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
							<li>
								<a href="help.html">Help</a>
							</li>
							
							<li>
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> 335 Shillman Hall, Boston.</li>
							<li>
								<i class="fa fa-mobile"></i> 333 222 3333 </li>
							<li>
								<i class="fa fa-phone"></i> +222 11 4444 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com"> example@husky.neu.edu</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
				<!-- payment -->
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						
					</ul>
				</div>
				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>
				© 2018 App Store | All rights reserved 
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>