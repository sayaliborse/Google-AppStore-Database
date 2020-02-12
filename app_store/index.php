<?php
if(!isset($_GET['Search'])){
	header("");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$search_sql = "SELECT * FROM application";
$search_query = mysqli_query($conn,$search_sql);
if(mysqli_num_rows($search_query)!=0){
$search_rs = mysqli_fetch_assoc($search_query);
}
$conn->close();
?>


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
					<form action="show.php" method="get">
						<input name="search" type="search" placeholder="How can we help you today?" name="Search" required="" onfocus="this.value="">
						<button type="submit" class="btn btn-default" aria-label="Left Align" name = "Search" value="">
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
						<form action="signin.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
							  <label class="form-check-label" for="gridRadios1">
								Are you a User?
							  </label>
							</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
								  <label class="form-check-label" for="gridRadios2">
									Are you a Developer?
								  </label>
								</div>
								<a href="#" data-toggle="modal" data-target="#Forgot_Password" style="float: right;">Forgot Password ?</a>
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
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							 Let's set up your Account.
						</p>
						<form action="signup.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder=" First Name" name="FName" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="MI" name="mi" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Last Name" name="LName" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Contact" name="Contact" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Address" name="Address" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="City" name="City" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Zip Code" name="Zip_code" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="State" name="State" required="">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="User Name" name="Username" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="confirm_password" id="password2" required="">
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="U" >
							  <label class="form-check-label" for="gridRadios1">
								Are you a User?
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="D">
							  <label class="form-check-label" for="gridRadios1">
								Are you a Developer?
							  </label>
							</div>
							<input type="submit" value="Sign Up" name="sub">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
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
						<option value="Baby Care">Entertainment</option>
						<option value="Frozen Food">Food & Drinks</option>
						<option value="Bread &amp; Bakery">Games</option>
						<option value="Sweets">Maps</option>
						<option value="Sweets">Music & Audio</option>
						<option value="Sweets">News & Magazines</option>
						<option value="Sweets">Photography</option>
						<option value="Sweets">Shopping</option>
						<option value="Sweets">Social</option>
						<option value="Sweets">Sports</option>
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
								<li class="active">
									<a class="nav-stylehead" href="index.html">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.html">About Us</a>
								</li>
								
								
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="product.html">Shop Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Top Apps
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="#" method="post">
						<input type="search" placeholder="App name..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- price range -->
				<div class="range">
					<a  href="product.html">My Apps </a>
					
				</div>
				<!-- //price range -->
				<!-- food preference -->
				<div class="range">
					<a href="product.html">My Account </a>
					
				</div>
				<!-- //food preference -->
				<!-- discounts -->
				<div class="range">
					
					
							<a href="product.html">Home<br></a>
							<a href="product.html">Games<br></a>
							<a href="product.html">Movies & TV<br></a>
							<a href="product.html">Music<br></a>
							<a href="product.html">Books<br></a>
					
				</div>
				<div class="range">
					<a href="#" data-toggle="modal" data-target="#Modal2">Redeem Gift Code</a>
				</div>
				<div class="range">
					<a href="#" data-toggle="modal" data-target="#Payment_Details">Add Payment Details</a>						
				</div>
				<div class="range">
					<a href="#" data-toggle="modal" data-target="#Edit_Payment_Details">Edit Payment Details</a>						
				</div>
				<div class="range">
					<a href="#" data-toggle="modal" data-target="#Remove_Payment_Details">Remove Payment Details</a>						
				</div>
				<div class="range">
					<a href="#" data-toggle="modal" data-target="#Edit_Personal_Info">Edit Personal Information.</a>
				</div>
				<div class="range">
					<a href="#" data-toggle="modal" data-target="#Delete_Account">Delete Account</a>
				</div>
				<div class="range">
					<a href="product.html">About App Store</a>						
				</div>
				<!-- //discounts -->
				
			</div>
			<!-- //product left -->-
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">New Releases</h3>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									
									<?php
									
									$con = mysqli_connect("localhost","root","","appstore");
									if (!$con)
									{
										die('Could not connect: ' . mysql_error());
									}
				  
									$sql2 = "select App_Icon from appinfo ai join application a on ai.App_ID =a.App_ID join review r on r.App_ID = a.App_ID where r.Rating = 4";
									$sql = "select App_Name,Rating from application a join review r on a.App_ID =r.App_ID where r.Rating = 4";
									$sql1 = "select DevName from developer d join application a on a.Dev_ID =d.Dev_ID join review r on r.App_ID = a.App_ID where r.Rating = 4";
									$result = mysqli_query($con,$sql);
									$result1 = mysqli_query($con,$sql1);
									$result2 = mysqli_query($con,$sql2);
									
									if(mysqli_error($con)){
										printf("error: %s\n", mysqli_error($con));
									}
									while ($row_category = mysqli_fetch_array($result2)){
										$var = $row_category['App_Icon'];
										echo "<img src=$var alt='' align ='left'>";
										echo "<div class='men-cart-pro'>";
										echo "<div class='inner-men-cart-pro'>";
										echo		"<a href='pra.php' class='link-product-add-cart' name='App_Name'>Quick View</a>";
										echo	"</div>";
										
									    echo "</div>";
										echo "<span class='product-new-top'>New</span>";
										echo "</div>";
										echo "<div class='item-info-product'>";

									}
									while ($row_category = mysqli_fetch_array($result)){	
										echo "<h4>";
										echo "<a href='pra.php'>",$row_category['App_Name'],"</a>";
										echo "</h4>";
										echo "<br>";
										echo "Rating :",$row_category['Rating'];
									}
									
									while ($row_category = mysqli_fetch_array($result1)){	
									echo "<div class='info-product-price'>";
									echo 	"<span class='item_price'>",$row_category['DevName'],"</span>";
										
									echo "</div>";	
									}
									mysqli_close($con);
								?>
									
									
									
									
				
									
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="WhatsApp" />
												<input type="hidden" name="amount" value="0.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
												
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/instagram.jpg" alt="" align = 'left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Instagram</a>
									</h4>
									<br>
									<a href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</a>
									<div class="info-product-price">
										<span class="item_price">Instagram</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Instagram" />
												<input type="hidden" name="amount" value="0.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>
								
								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/gmail.png" alt="" align = 'left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Gmail</a>
									</h4>
									<br>
									<a href="#">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</a>
									<div class="info-product-price">
										<span class="item_price">Google LLC</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Gmail" />
												<input type="hidden" name="amount" value="0.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						
						<div class="clearfix"></div>
						<div class="search-hotel">
									<a href=" " >More</a>
									<form action="#" method="post">
										<input type="submit" value=" ">
									</form>
						</div>
					</div>
					<!-- //first section (nuts) -->
										<!-- third section (oils) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Food & Drinks</h3>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mc.png" alt="" align='left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">McDonalds</a>
									</h4>
									<br>
									 Rating : 4.5
									<div class="info-product-price">
										<span class="item_price">McDonalds, USA LLC`</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Freedom Sunflower Oil, 1L" />
												<input type="hidden" name="amount" value="78.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/sub.png" alt="" align='left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Subway</a>
									</h4>
									<br>
									 Rating : 4.3
									<div class="info-product-price">
										<span class="item_price">Subway Restaurants</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Saffola Gold, 1L" />
												<input type="hidden" name="amount" value="130.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/dunkin.jpg" alt="" align='left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Dunkin Donuts</a>
									</h4>
									<br>
									 Rating : 4.4
									<div class="info-product-price">
										<span class="item_price">Dunkin Brands, Inc</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Fortune Oil, 5L" />
												<input type="hidden" name="amount" value="399.99" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="search-hotel">
									<a href=" " >More</a>
									<form action="#" method="post">
										<input type="submit" value=" ">
									</form>
						</div>
					</div>
					<!-- //third section (oils) -->
					
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Music</h3>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/musi.jpg" alt="" align='left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Musi</a>
									</h4>
									<br>
									 Rating : 4.2
									<div class="info-product-price">
										<span class="item_price">Musi, Inc</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="YiPPee Noodles, 65g" />
												<input type="hidden" name="amount" value="15.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/shazam.jpg" alt="" align = 'left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Shazam</a>
									</h4>
									<br>
									 Rating : 4.1
									<div class="info-product-price">
										<span class="item_price">Shazam, Inc</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Wheat Pasta, 500g" />
												<input type="hidden" name="amount" value="98.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/googleplay.jpg" alt="" align='left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Google Play</a>
									</h4>
									<br>
									 Rating : 4.6
									<div class="info-product-price">
										<span class="item_price">Google, Inc</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Chinese Noodles, 68g" />
												<input type="hidden" name="amount" value="11.99" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
								<div class="clearfix"></div>
								<div class="search-hotel">
									<a href=" " >More</a>
									<form action="#" method="post">
										<input type="submit" value=" ">
									</form>
						</div>
									
									
					</div>
					<!-- //fourth section (noodles) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Games</h3>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/templerun.jpg" alt="" align ='left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Temple Run</a>
									</h4>
									<br>
									 Rating : 4.3
									<div class="info-product-price">
										<span class="item_price">Imangi Solutions</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="YiPPee Noodles, 65g" />
												<input type="hidden" name="amount" value="15.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/pokemon.jpg" alt="" align='left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Pokemon Go</a>
									</h4>
									<br>
									 Rating : 4.1
									<div class="info-product-price">
										<span class="item_price">Niantic, Inc.</span>
										
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Wheat Pasta, 500g" />
												<input type="hidden" name="amount" value="98.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/subwaysurfer.jpg" alt="" align = 'left'>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Subway Surfers</a>
									</h4>
									<br>
									 Rating : 4.5
									<div class="info-product-price">
										<span class="item_price">Kiloo</span>
										
									</div>
									
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Chinese Noodles, 68g" />
												<input type="hidden" name="amount" value="11.99" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="search-hotel">
									<a href=" " >More</a>
									<form action="#" method="post">
										<input type="submit" value=" ">
									</form>
						</div>
					</div>
					
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
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
								<a href="product.html">Books</a>
							</li>
							<li>
								<a href="product.html">Education</a>
							</li>
							<li>
								<a href="product2.html">Entertainment</a>
							</li>
							<li>
								<a href="product2.html">Food & Drinks</a>
							</li>
							<li>
								<a href="product.html">Games</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							
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
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
				
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
				© 2018 App Store. All rights reserved  			
			</p>
		</div>
	</div>
	<!-- //copyright -->
	
	
	<!-- Modal2 -->
	<div class="modal fade" id="Modal2" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Redeem Your Code</h3>
						<form action="redeemcode.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Enter Code" name="code" required="">
							</div>
							<input type="submit" value="Redeem">
						</form>
						<p>
							<a href="#">By clicking Redeem, I agree to your terms for Gift Card.</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->

<!-- Add Payment Details Modal-->
	<div class="modal fade" id="Payment_Details" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Add Payment Details</h3>
						<form action="user_payment_details.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Bank Name" name="App_Name" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Account Number" name="Account_Number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Routing Number" name="Routing_Number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Credit Card Number" name="Credit_card_number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="CVV" name="CVV" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Zip Code" name="Zip_code" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Card Expire Date" name="expire_date" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name on the Card" name="name_on_card" required="">
							</div>
							<input type="submit" value="ADD DETAILS">
						</form>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
<!-- //Add Payment Details Modal -->



<!--Edit Payment Details-->
<div class="modal fade" id="Edit_Payment_Details" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Edit Payment Details</h3>
						<form action="edit_user_payment_details.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Bank Name" name="Bank_Name" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Account Number" name="Account_Number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Routing Number" name="Routing_Number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Credit Card Number" name="Credit_card_number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="CVV" name="CVV" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Zip Code" name="Zip_code" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Card Expire Date" name="expire_date" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name on the Card" name="name_on_card" required="">
							</div>
							<input type="submit" value="EDIT DETAILS">
						</form>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
<!-- //Edit Payment Details Modal -->



<!--Remove Payment Details-->
<div class="modal fade" id="Remove_Payment_Details" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Delete Payment Details</h3>
						<form action="remove_user_payment_details.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Bank Name" name="Bank_Name" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Account Number" name="Account_Number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Routing Number" name="Routing_Number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Credit Card Number" name="Credit_card_number" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="CVV" name="CVV" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Zip Code" name="Zip_code" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Card Expire Date" name="expire_date" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name on the Card" name="name_on_card" required="">
							</div>
							<input type="submit" value="REMOVE DETAILS">
						</form>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
<!--//Remove Payment Details-->





<!-- Edit Prsonal Information Modal-->
	<div class="modal fade" id="Edit_Personal_Info" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Edit Personal Info.</h3>
						<form action="edit_personal_info.php" method="get">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="First Name" name="First_Name" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="MI" name="MI" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Last Name" name="Last_Name" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Contact Number" name="Contact" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="email" placeholder="Email" name="Email" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Address" name="Address" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="City" name="City" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="State" name="State" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Zip Code" name="Zip_code" required="">
							</div>
							<input type="submit" value="SAVE CHANGES">
						</form>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
<!-- //Edit Personal Info Modal -->





<!-- Change Password Modal-->
	<div class="modal fade" id="Forgot_Password" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Change Your Password</h3>
						<form action="forgot_password.php" method="get">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="name" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Old Password" name="Old_Password" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="New Password" name="New_Password" id="password" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Confirm Password" name="Confirm_Password" id="password2" required="">
							</div>	
							<input type="submit" value="CHANGE PASSWORD">
						</form>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Change Password Modal -->

<!-- Delete Account-->
<div class="modal fade" id="Delete_Account" tabindex="-1" role="dialog">
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
						<h3 class="agileinfo_sign">Delete Account </h3>
						
						<form action="delete_account.php" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="U" checked>
							  <label class="form-check-label" for="gridRadios1">
								Are you a User?
							  </label>
							</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="D">
								  <label class="form-check-label" for="gridRadios2">
									Are you a Developer?
								  </label>
								</div>
								
							<input type="submit" value="Delete">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Delete Account -->
	




	

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
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

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

	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

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

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>

</html>