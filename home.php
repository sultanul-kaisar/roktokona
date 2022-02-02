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

		<div id="hero-area">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-xs-12 text-center">
						<div class="contents">
							<h1 class="head-title">Welcome to <span class="year">RoktoKona</span></h1>
							<p>donate blood save lives</p>
							<div class="search-bar">
								<div class="search-inner">
									<form class="search-form" method="POST">
										<div class="form-group">
											<div class="select">
												<select class="form-control">
													<option>Blood Group</option>
													
													<option value="A+">A+</option>
													<option value="A-">A-</option>
													<option value="B+">B+</option>
													<option value="B-">B-</option>
													<option value="AB+">AB+</option>
													<option value="AB−">AB−</option>
													<option value="O+">O+</option>
													<option value="O-">O-</option>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<div class="select">
												<select class="form-control">
													<option>Location</option>
													<option value="1001">Mirpur</option>
													<option value="1002">Uttara</option>
													<option value="1003">Dhanmondi</option>
													<option value="1004">Gulshan</option>
													<option value="1005">Mohammadpur</option>
													<option value="1006">Badda</option>
													<option value="1007">Banani</option>
													<option value="1008">Banani DOHS</option>
													<option value="1009">Banglamotor</option>
													<option value="1010">Bangshal</option>
													<option value="1011">Baridhara</option>
													<option value="1012">Basabo</option>
													<option value="1013">Basundhara</option>
													<option value="1014">Cantonment</option>
													<option value="1015">Chaukbazar</option>
													<option value="1016">Demra</option>
													<option value="1017">Dhamrai</option>
													<option value="1018">Dohar</option>
													<option value="1019">Elephant Road</option>
													<option value="1020">Hazaribagh</option>
													<option value="1021">Jatrabari</option>
													<option value="1022">Kafrul</option>
													<option value="1023">Kamrangirchar</option>
													<option value="1024">Kawranbazar</option>
													<option value="1025">Keraniganj</option>
													<option value="1026">Khilgaon</option>
													<option value="1027">Khilkhet</option>
													<option value="1028">Kotowali</option>
													<option value="1029">Lalbag</option>
													<option value="1030">Malibag</option>
													<option value="1031">Mirpur DOHS</option>
													<option value="1032">Mogbazar</option>
													<option value="1033">Mohakhali</option>
													<option value="1034">Mohakhali DOHS</option>
													<option value="1035">Motijheel</option>
													<option value="1036">Nawabganj</option>
													<option value="1037">New Market</option>
													<option value="1038">Paltan</option>
													<option value="1039">Purbachal</option>
													<option value="1040">Ramna</option>
													<option value="1041">Rampura</option>
													<option value="1042">Savar</option>
													<option value="1043">Shajahanpur</option>
													<option value="1044">Sutrapur</option>
													<option value="1045">Tejgaon</option>
													<option value="1046">Tongi</option>
													<option value="1047">Wari</option>
												</select>
											</div>
										</div>
										
										<button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<div class="container">
		<div class="row">
			
			<div class="tags">
				<span>Search by tags: </span>
				
				<a href="#">	
					<span class="badge badge-primary">A+</span>	
				</a>
				<a href="#">	
					<span class="badge badge-primary">A-</span>	
				</a>
				<a href="#">	
					<span class="badge badge-primary">B+</span>	
				</a>
				<a href="#">	
					<span class="badge badge-primary">B-</span>	
				</a>
				<a href="#">	
					<span class="badge badge-primary">AB+</span>	
				</a>
				<a href="#">	
					<span class="badge badge-primary">AB−</span>	
				</a>
				<a href="#">	
					<span class="badge badge-primary">O+</span>	
				</a>
				<a href="#">	
					<span class="badge badge-primary">O-</span>	
				</a>
			</div>
			
		</div>
	</div>
	
	
	<section class="categories-icon section-padding bg-drack">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=CSE">CSE</a> </h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=ICE">ICE </a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=EEE">EEE</a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Textile_Engineering">Textile Engineering</a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Architecture">Architecture </a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Pharmacy">Pharmacy </a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=English">English</a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=BBA">BBA</a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Law_And_Justice">Law & Justice </a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Islamic_Studies">Islamic Studies </a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Economics">Economics </a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Development_Studies">Development Studies </a></h4>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<a href="category.html">
						<div class="icon-box">
							<h4><a class="text-white" href="blood-by-department.php?dept=Bangla">Bangla</a></h4>
						</div>
					</a>
				</div>
				
			</div>
		</div>
	</section>


	<section class="featured section-padding">
		<div class="container">
			<h1 class="section-title">Recent Campaign</h1>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
					<div class="featured-box">
						<figure>
							<div class="icon">
								<i class="lni-heart" title="Up comming"></i>
							</div>
							<a href="#"><img class="img-fluid" src="assets/img/featured/c2.jpg" alt=""></a>
						</figure>
						<div class="feature-content">
							<div class="product">
								<a href="#"><i class="fa fa-heart"></i> Up comming</a>
							</div>
							<h4><a href="ads-details.html">Donate blood save lives</a></h4>
							<span>Last Updated: 1 hours ago</span>
							<ul class="address">
								<li>
									<a href="#"><i class="lni-map-marker"></i> Dhaka University</a>
								</li>
								<li>
									<a href="#"><i class="lni-alarm-clock"></i> August 18, 2018</a>
								</li>
								<li>
									<a href="#"><i class="lni-user"></i> 100</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-tint"></i> 50</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
					<div class="featured-box">
						<figure>
							<div class="icon">
								<i class="fa fa-check-square-o" title="Completed"></i>
							</div>
							<a href="#"><img class="img-fluid" src="assets/img/featured/c2.jpg" alt=""></a>
						</figure>
					<div class="feature-content">
						<div class="product">
							<a href="#"><i class="fa fa-heart"></i> Completed</a>
						</div>
						<h4><a href="ads-details.html">Blood for life</a></h4>
						<span>Last Updated: 1 hours ago</span>
						<ul class="address">
							<li>
								<a href="#"><i class="lni-map-marker"></i> Dhaka University</a>
							</li>
							<li>
								<a href="#"><i class="lni-alarm-clock"></i> Feb 18, 2018</a>
							</li>
							<li>
								<a href="#"><i class="lni-user"></i> 100</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-tint"></i> 50</a>
							</li>
						</ul>
					</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
					<div class="featured-box">
						<figure>
							<div class="icon">
								<i class="lni-heart" title="Up comming"></i>
							</div>
							<a href="#"><img class="img-fluid" src="assets/img/featured/c2.jpg" alt=""></a>
						</figure>
					<div class="feature-content">
						<div class="product">
							<a href="#"><i class="fa fa-heart"></i> Up comming</a>
						</div>
						<h4><a href="ads-details.html">Blood for blood</a></h4>
						<span>Last Updated: 1 hours ago</span>
						<ul class="address">
							<li>
								<a href="#"><i class="lni-map-marker"></i> Dhaka University</a>
							</li>
							<li>
								<a href="#"><i class="lni-alarm-clock"></i> August 18, 2018</a>
							</li>
							<li>
								<a href="#"><i class="lni-user"></i> 100</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-tint"></i> 50</a>
							</li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="counter-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 work-counter-widget text-center">
					<div class="counter">
						<div class="icon"><i class="fa fa-tint"></i></div>
						<h2 class="counterUp">2000</h2>
						<p>Total donation</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 work-counter-widget text-center">
				<div class="counter">
				<div class="icon"><i class="lni-map"></i></div>
				<h2 class="counterUp">47</h2>
				<p>TOtal Locations</p>
				</div>
				</div>

				<div class="col-md-3 col-sm-6 work-counter-widget text-center">
				<div class="counter">
				<div class="icon"><i class="lni-user"></i></div>
				<h2 class="counterUp">4000</h2>
				<p>Total Donors</p>
				</div>
				</div>

				<div class="col-md-3 col-sm-6 work-counter-widget text-center">
				<div class="counter">
				<div class="icon"><i class="lni-heart"></i></div>
				<h2 class="counterUp">20</h2>
				<p>Total Campaigns</p>
				</div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonial section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="testimonials" class="owl-carousel">
						<div class="item">
							<div class="testimonial-item">
								<div class="img-thumb">
									<img src="assets/img/testimonial/img1.png" alt="">
								</div>
								<div class="content">
									<h2><a href="#">Kaisar</a></h2>
									<p class="description">“Bring a life back to power. Make blood donation your responsibility”</p>
									<h3>Department of <a href="#">CSE</a></h3>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-item">
								<div class="img-thumb">
									<img src="assets/img/testimonial/img3.png" alt="">
								</div>
								<div class="content">
									<h2><a href="#">Zahid Bin</a></h2>
									<p class="description">“Your children needs one pint of blood to live, pick the heterosexual one”</p>
									<h3>Department of <a href="#">CSE</a></h3>
								</div>
							</div>
						</div>
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
</html>
