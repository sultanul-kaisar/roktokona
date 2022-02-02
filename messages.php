
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
		<title>Roktokona | Chat/Messages</title>

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
						<h3 class="product-title">Chat/Messages</h3>
						<ol class="breadcrumb">
							<li><a href="home.php">Home /</a></li>
							<li class="current">Chat/Messages</li>
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
								<h2 class="dashbord-title">Chat/Messages</h2>
							</div>
							<div class="offerermessage">
								<figure>
									<img src="assets/img/author/img1.jpg" alt="">
								</figure>
								<div class="description">
									<div class="info">
										<h3>Meagan Miller</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
									</div>
									<time class="date">June 21, 2018</time>
								</div>
							</div>
							<div class="memessage readmessage">
											<figure>
												<img src="assets/img/author/img1.jpg" alt="">
											</figure>
								<div class="description">
									<div class="info">
										<h3>Meagan Miller</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
									</div>
									<div class="text-right">
										<p><a href="#">https://themeforest.net</a></p>
										<p>It that ok?</p>
										<time class="date">Jun 28, 2017 09:30</time>
									</div>
								</div>
							</div>
							<div class="offerermessage">
												<figure>
													<img src="assets/img/author/img1.jpg" alt="">
												</figure>
								<div class="description">
									<div class="info">
										<h3>Meagan Miller</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
									</div>
									<time class="date">June 21, 2018</time>
								</div>
							</div>
							<div class="memessage readmessage">
								<figure>
									<img src="assets/img/author/img1.jpg" alt="">
								</figure>
								<div class="description">
									<div class="info">
										<h3>Meagan Miller</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
									</div>
									<div class="text-right">
										<p><a href="#">https://themeforest.net</a></p>
										<p>It that ok?</p>
										<time class="date">Jun 28, 2017 09:30</time>
									</div>
								</div>
							</div>
						</div>
						<div class="replay-box">
								<textarea class="form-control" name="reply" placeholder="Type Here & Press Enter"></textarea>
							<div class="icon-box">
								<i class="lni-thumbs-up"></i>
								<i class="lni-thumbs-down"></i>
								<i class="lni-emoji-smile"></i>
							</div>
						</div>
								
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