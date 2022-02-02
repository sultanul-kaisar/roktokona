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
		<title>Roktokona | Home</title>

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
	</head>
	<body>

		<header id="header-wrap">

		<?php include('navbar.php');?>

	
		</header>


		<div class="page-header" style="background: url(assets/img/banner2.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-wrapper">
							<h2 class="product-title">Contact Us</h2>
								<ol class="breadcrumb">
									<li><a href="home.php">Home /</a></li>
									<li class="current">Contact Us</li>
								</ol>
						</div>
					</div>
				</div>
			</div>
		</div>




		<section id="content" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<h2 class="contact-title">
							Send Message Us
						</h2>

						<form id="contactForm" class="contact-form" data-toggle="validator">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<input type="text" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<textarea class="form-control" placeholder="Massage" rows="10" data-error="Write your message" required></textarea>
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
								</div>
									<div class="col-md-12">
										<button type="submit" id="submit" class="btn btn-common btn-block">Send Now</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		
		</section>


<?php include('footer.php');?>

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

<!-- Mirrored from preview.uideck.com/items/classixer/account-profile-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jul 2018 09:05:37 GMT -->
</html>