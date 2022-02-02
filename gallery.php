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
		<title>Roktokona | Photo Gallery</title>

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
							<h3 class="product-title">Photo Gallery</h3>
							<ol class="breadcrumb">
								<li><a href="home.php">Home /</a></li>
								<li class="current">Photo Gallery</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<section class="featured section-padding">
			<div class="container">
				<h1 class="section-title">Photo Albums</h1>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
							<div class="featured-box">						

								<a class="gallery_row_a" href="gallery.php?id=blooddonationcamp">
									<div class="album_div"> 
										<center> <div class="album_div_inner1">  </div> </center>
										<center> <img src="assets/img/blood_donation.jpg" width="400" height="200"><br></center>
										<center> <div class="album_div_inner1"> Blood Donation Camp</div> </center>
									</div>
								</a>
							</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
						<div class="featured-box">
							<a class="gallery_row_a" href="gallery.php?id=seminar">
								<div class="album_div"> 
									<center> <div class="album_div_inner1">  </div> </center>
									<center> <img src="assets/img/seminar.jpg" width="400" height="200"><br></center>
									<center> <div class="album_div_inner1"> Seminar </div> </center>
								</div>
							</a>
						</div>
					</div>	
					
													
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
						<div class="featured-box">
							<a class="gallery_row_a" href="gallery.php?id=blooddonation">
								<div class="album_div"> 
									<center> <div class="album_div_inner1">  </div> </center>
									<center> <img src="assets/img/donation.jpg" width="400" height="200"><br></center>
									<center> <div class="album_div_inner1"> Blood Donation </div> </center>
								</div>
							</a>
						</div>
					</div>
														
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
						<div class="featured-box">
							<a class="gallery_row_a" href="gallery.php?id=meeting">
								<div class="album_div"> 
									<center> <div class="album_div_inner1">  </div> </center>
									<center> <img src="assets/img/meetings.jpg" width="400" height="200"><br></center>
									<center> <div class="album_div_inner1"> Meetings </div> </center>
								</div>
							</a>
								
						</div>
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