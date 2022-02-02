<?php
    ob_start();
	include 'core/Session.php';
	Session::checkUserSession();
	
	require 'core/Database.php';
	require 'core/Format.php';
	require 'class/Profile.php';
	require 'class/Donor.php';
	
	//require 'core/Format.php';
	
	$db = new Database();
	$fm = new Format();
	$profile = new Profile();
	$donor = new Donor();
	
	include('upload-profile.php');
	
?>
<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['deleteDonation'])){
		$d_id = Session::getUser('registered_student_id');
		$deletedonation = $profile->deleteDonationHistory($d_id, $_POST);
	}
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
		<div class="container">
			<div class="row">
				<div class="col-sm-12 pt-3">
					<?php
						if(isset($profileupload)){
							echo $profileupload;
						}else if(isset($deletedonation)){
							echo $deletedonation;
						}
					?>
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
										<ul class="nav nav-pills nav-fill navtop">
											<li class="nav-item">
												<a class="nav-link" href="#menu1" data-toggle="tab">Campaign</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active" href="#menu2" data-toggle="tab">My Donations</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#menu3" data-toggle="tab">Others</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane" role="tabpanel" id="menu1">Campaign</div>
											<div class="tab-pane p-3 active" role="tabpanel" id="menu2">
												<?php
													$user_id = Session::getUser('registered_student_id');
													$getdonation = $profile->myDonations($user_id);
													
													if($getdonation != NULL){
												?>
												<table class="table bg-light">
													<thead>
														<tr>
															<th>Place</th>
															<th>Date</th>
															<th>Action</th>
														</tr>
													</thead>
													
													<tbody>
												<?php
													while($rowdata = $getdonation->fetch_assoc()){
												?>
														<tr>
															<th><?php echo $rowdata['donation_place'];?></th>
															<th>
																<?php 
																	echo $fm->formatOnlyDate($rowdata['donation_date']);
																?>
															</th>
															<th>
																<form method="POST">
																	<input type="hidden" name="donation_id" value="<?php echo $rowdata['donation_id'];?>" />
																	<button class="btn btn-danger text-light" name="deleteDonation"><i class="lni-ban"></i></button>
																</form>
															</th>
														</tr>
												<?php
													}
												?>
													</tbody>
												</table>
												<?php
													
													}else{
												?>
												<div class="jumbotron">
													<h3 class="text-center text-danger" style="font-size:30px;">No donation history found</h3>
													<h4 class="text-center" style="font-size:20px;"><a href="update_donation.php">Click here</a> to add history</h4>
												 </div>
												<?php
													}
												?>
											</div>
											<div class="tab-pane" role="tabpanel" id="menu3">Others</div>
										</div>
										</div>
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
		
		<script>
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});
</script>
	</body>

</html>