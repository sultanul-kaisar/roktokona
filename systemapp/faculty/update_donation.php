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
		<title>Roktokona | Ratings</title>

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

		<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

		<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
							<h3 class="product-title">Update Donation Details</h3>
							<ol class="breadcrumb">
								<li><a href="home.php">Home /</a></li>
								<li class="current">Update Donation Details</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
		<div id="content" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
						<?php include('aside.php');?>
					</div>
					
					<div class="col-xs-16 col-sm-16 col-md-16 col-lg-8">
						<div class="inner-box">
							<div class="tg-contactdetail">
								<div class="dashboard-box">
									<h2 class="dashbord-title">Update Donation Details</h2>
								</div>
								<form id="contactForm" class="contact-form" data-toggle="validator">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group mb-3">
												<label class="control-label">Enter Date Of Last Donation</label>
												<input class="form-control input-md" name="date" type="date">
											</div>
										</div>
										<label class="control-label">Drop your last blood test or donation document</label>										
										<label class="tg-fileuploadlabel" for="tg-photogallery">
											<span>Drop file anywhere to upload</span>
											<span>Or</span>
											<span class="btn btn-common">Select File</span>
											<span>Maximum upload file size: 5 MB</span>
											<input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
										</label>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-12">
							<button class="btn btn-common btn-block" name="Update" type="button ">Update Now</button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</div>
					</div>
							
				</div>
							
									
			</div>
					
		</div>
				
			
		
			
		


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