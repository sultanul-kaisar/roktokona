<?php
    ob_start();
	include 'core/Session.php';
	Session::checkUserSession();
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Roktokona | Change Password</title>

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

		<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

		<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>

	<header id="header-wrap">

		<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
			<div class="container">

				<div class="navbar-header">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					<span class="lni-menu"></span>
					<span class="lni-menu"></span>
					<span class="lni-menu"></span>
					</button>
					<a href="home.php" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
				</div>
				<div class="collapse navbar-collapse" id="main-navbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="home.php">
								Home
							</a>
						</li>
												
						<li class="nav-item">
							<a class="nav-link" href="#">
								Photo Gallery
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="#">
								About 
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Blog
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">
							Contact
							</a>
						</li>
					</ul>
					<ul class="sign-in">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="profile.php"><i class="lni-user"></i> Profile</a>
								<a class="dropdown-item" href="?action=logout"><i class="fa fa-power-off"></i> Logout</a>
																
								<?php
									if (isset($_GET['action'])  && $_GET['action']== "logout")
									{
										Session::destroyUser();
										
									}
								
								?>
							</div>
						</li>
					</ul>
					<a class="tg-btn" href="#">
						<i class="fa fa-tint"></i> Request Blood
					</a>
				</div>
			</div>

			<ul class="mobile-menu">
				<li>
					<a class="active" href="home.php">Home</a>
				</li>
				
				<li>
					<a href="#">Photo Gallery</a>
				</li>
				
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a>My Account</a>
					<ul class="dropdown">
						<li><a href="profile.php"><i class="lni-user"></i> Profile</a></li>
						<li><a href="?action=logout"><i class="fa fa-power-off"></i> Logout</a></li>
						<?php
							if (isset($_GET['action'])  && $_GET['action']== "logout")
							{
								Session::destroyUser();
									
							}
						?>
					</ul>
				</li>
				
				<li>
					<a class="tg-btn" style="color:#FFFFFF;margin-bottom:10px;" href="#">
						<i class="fa fa-tint"></i> Request Blood
					</a>
				</li>
			</ul>
		</nav>

			<ul class="mobile-menu">
				<li>
					<a class="active" href="home.php">Home</a>
				</li>
				<li>
					<a href="#">Services</a>
				</li>
				<li>
					<a href="#">Photo Gallery</a>
				</li>
				
				<li>
					<a href="#">About</a>
				</li>
				
				<li>
					<a href="contact.php">Contact</a>
				</li>





</nav>

</header>



<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<div class="container">
<div class="row">
<div class="col-sm-12">

</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center">Use the form below to change your password. Your password cannot be the same as your user ID.</p>
<form method="post" id="passwordForm">
<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
<div class="row">
<div class="col-sm-6">
<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
</div>
<div class="col-sm-6">
<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
</div>
</div>
<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
<div class="row">
<div class="col-sm-12">
<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
</div>
</div>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>


<footer>

		<section class="footer-Content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
						<div class="widget">
							<h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>
							<div class="textwidget">
								<p>A single pint can save three lives, a single gesture can create a million smiles</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
						<div class="widget">
							<h3 class="block-title">Latest Campaigns</h3>
							<ul class="media-content-list">
								<li>
									<div class="media-left">
										<img class="img-fluid" src="assets/img/featured/c1.jpg" alt="">
										
									</div>
									<div class="media-body">
										<h4 class="post-title"><a href="ads-details.html">Blood for life</a></h4>
										<span class="date">12 Jan 2018</span>
									</div>
								</li>
								<li>
									<div class="media-left">
										<img class="img-fluid" src="assets/img/featured/c2.jpg" alt="">
										
									</div>
									<div class="media-body">
										<h4 class="post-title"><a href="ads-details.html">Donate blood</a></h4>
										<span class="date">28 Mar 2018</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<div class="widget">
					<h3 class="block-title">Help & Support</h3>
					<ul class="menu">
					<li><a href="#">Live Chat</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Purchase Protection</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Contact us</a></li>
					</ul>
					</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<div class="widget">
					<h3 class="block-title">Subscribe us</h3>
					<p class="text-sub">We have over 5 years of experience Our suppoer avalable to help you 24 hours a day, seven days week</p>
					<form method="post" id="subscribe-form" name="subscribe-form" class="validate">
					<div class="form-group is-empty">
					<input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">
					<button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-check-box"></i></button>
					<div class="clearfix"></div>
					</div>
					</form>
					<ul class="footer-social">
					<li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
					<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
					<li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
					<li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
					</ul>
					</div>
					</div>
				</div>
			</div>
		</section>


		<div id="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="site-info">
							<p style="text-align:center;">All copyrights reserved &copy; 2018 - Developed by <a href="#" rel="nofollow">SHORON</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>


	<a href="#" class="back-to-top">
	<i class="lni-chevron-up"></i>
	</a>

	<div id="preloader">
	<div class="loader" id="loader-1"></div>
	</div>


	<script src="assets/js/jquery-min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/nivo-lightbox.js"></script>
	<script src="assets/js/jquery.slicknav.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/form-validator.min.js"></script>
	<script src="assets/js/contact-form-script.min.js"></script>
	<script src="assets/js/summernote.js"></script>
	</body>
</html>
