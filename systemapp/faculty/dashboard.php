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
		<title>Roktokona | Dashboard</title>

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
							<h3 class="product-title">Dashboard</h3>
							<ol class="breadcrumb">
								<li><a href="home.php">Home /</a></li>
								<li class="current">Dashboard</li>
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
			
			<div class="col-sm-12 col-md-8 col-lg-9">
			<div class="page-content">
			<div class="inner-box">
			<div class="dashboard-box">
			<h2 class="dashbord-title">Dashboard</h2>
			</div>
			<div class="dashboard-wrapper">
			<div class="dashboard-sections">
			<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
			<div class="dashboardbox">
			<div class="icon"><i class="lni-write"></i></div>
			<div class="contentbox">
			<h2><a href="#">Total Ad Posted</a></h2>
			<h3>480 Add Posted</h3>
			</div>
			</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
			<div class="dashboardbox">
			<div class="icon"><i class="lni-add-files"></i></div>
			<div class="contentbox">
			<h2><a href="#">Featured Ads</a></h2>
			<h3>80 Add Posted</h3>
			</div>
			</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
			<div class="dashboardbox">
			<div class="icon"><i class="lni-support"></i></div>
			<div class="contentbox">
			<h2><a href="#">Offers / Messages</a></h2>
			<h3>2040 Messages</h3>
			</div>
			</div>
			</div>
			</div>
			</div>
			<table class="table table-responsive dashboardtable tablemyads">
			<thead>
			<tr>
			<th>
			<span class="checkbox">
			<input id="checkedall" type="checkbox" name="myads" value="checkall">
			<label for="checkedall"></label>
			</span>
			</th>
			<th>Photo</th>
			<th>Title</th>
			<th>Category</th>
			<th>Ad Status</th>
			<th>Price</th>
			<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<tr data-category="active">
			<td>
			<span class="checkbox">
			<input id="adone" type="checkbox" name="myads" value="myadone">
			<label for="adone"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img1.jpg" alt=""></td>
			<td data-title="Title">
			<h3>HP Laptop 6560b core i3 3nd generation</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
			<td data-title="Ad Status"><span class="adstatus adstatusactive">active</span></td>
			<td data-title="Price">
			<h3>139$</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="active">
			<td>
			<span class="checkbox">
			<input id="adtwo" type="checkbox" name="myads" value="myadtwo">
			<label for="adtwo"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img2.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Jvc Haebr80b In-ear Sports Headphones</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Electronics</td>
			<td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
			<td data-title="Price">
			<h3>$189</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="inactive">
			<td>
			<span class="checkbox">
			<input id="adthree" type="checkbox" name="myads" value="myadthree">
			<label for="adthree"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img3.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Real Estate</td>
			<td>
			<span class="adstatus adstatusinactive">Inactive</span>
			</td>
			<td data-title="Price">
			<h3>$69</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="sold">
			<td>
			<span class="checkbox">
			<input id="adfour" type="checkbox" name="myads" value="myadfour">
			<label for="adfour"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img4.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Apple iPhone X, Fully Unlocked 5.8", 64 GB - Black</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Mobile</td>
			<td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
			<td data-title="Price">
			<h3>$89</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			 <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="active">
			<td>
			<span class="checkbox">
			<input id="adfive" type="checkbox" name="myads" value="myadfive">
			<label for="adfive"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img5.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Apple Macbook Pro 13 Inch with/without Touch Bar</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Apple</td>
			<td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
			<td data-title="Price">
			<h3>$289</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="sold">
			<td>
			<span class="checkbox">
			<input id="adsix" type="checkbox" name="myads" value="myadsix">
			<label for="adsix"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img6.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Apple MQDT2CL/A 10.5-Inch 64GB Wi-Fi iPad Pro</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Apple iPad</td>
			<td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
			<td data-title="Price">
			<h3>$159</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="expired">
			<td>
			<span class="checkbox">
			<input id="adseven" type="checkbox" name="myads" value="myadseven">
			<label for="adseven"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img7.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Essential Phone 8GB Unlocked with Dual Camera</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Mobile</td>
			<td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
			<td data-title="Price">
			<h3>$89</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="inactive">
			<td>
			<span class="checkbox">
			<input id="adeight" type="checkbox" name="myads" value="myadeight">
			<label for="adeight"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img8.jpg" alt=""></td>
			<td data-title="Title">
			<h3>LG Nexus 5x LG-H791 32GB GSM Smartphone</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Mobile</td>
			<td>
			<span class="adstatus adstatusinactive">Inactive</span>
			</td>
			<td data-title="Price">
			<h3>$59</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="expired">
			<td>
			<span class="checkbox">
			<input id="adnine" type="checkbox" name="myads" value="myadnine">
			<label for="adnine"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img9.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Samsung Galaxy G550T On5 GSM Unlocked Smartphone</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Mobile</td>
			<td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
			<td data-title="Price">
			<h3>$129</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			<tr data-category="deleted">
			<td>
			<span class="checkbox">
			<input id="adten" type="checkbox" name="myads" value="myadten">
			<label for="adten"></label>
			</span>
			</td>
			<td class="photo"><img class="img-fluid" src="assets/img/product/img10.jpg" alt=""></td>
			<td data-title="Title">
			<h3>Apple iMac Pro 27" All-in-One Desktop, Space Gray</h3>
			<span>Ad ID: ng3D5hAMHPajQrM</span>
			</td>
			<td data-title="Category">Apple iMac</td>
			<td data-title="Ad Status"><span class="adstatus adstatusdeleted">Deleted</span></td>
			<td data-title="Price">
			<h3>$389</h3>
			</td>
			<td data-title="Action">
			<div class="btns-actions">
			<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
			<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
			<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
			</div>
			</td>
			</tr>
			</tbody>
			</table>
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