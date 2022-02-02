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
		$s_id = Session::getUser('registered_student_id');
		$studentdata = $profile->getProfileById($s_id);
	 
	 
	 
		if($studentdata == NULL){
?>
	<h1 style="text-align:center;">404 NOT FOUND</h1>
<?php	
			exit();
		}
?>

<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['saveDonation'])){
		
		$donationhistory = $donor->donationHistory($_POST);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Roktokona | Donation</title>

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
	
		<div class="container">
			<div class="row">
				<div class="col-sm-12 pt-3">
					<?php
						if(isset($profileupload)){
							echo $profileupload;
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
					
					<div class="col-xs-16 col-sm-16 col-md-16 col-lg-8">
						<div class="inner-box">
							<div class="tg-contactdetail">
								<div class="dashboard-box">
									<?php
										if(isset($donationhistory)){
											echo $donationhistory;
										}
									?>
									<h2 class="dashbord-title">Update Donation Details</h2>
								</div>
								<form method="POST" class="contact-form">
									<input type="hidden" name="donation_donar_id" value="<?php echo Session::getUser('registered_student_id');?>">
                              
									<div class="row">
										<div class="col-md-12">
											<div class="form-group mb-3">
												<label class="control-label">Donation Place</label>
												<input class="form-control input-md" name="donation_place" type="text">
											</div>
										</div>
										
										<div class="col-md-12">
											<div class="form-group mb-3">
												<label class="control-label">Enter Date Of Last Donation</label>
												<input class="form-control input-md" name="donation_date" type="date">
											</div>
										</div>
										
										<div class="col-md-12">
											<button class="btn btn-common btn-block" name="saveDonation" type="button ">Save</button>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
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