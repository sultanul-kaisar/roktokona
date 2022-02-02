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

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Roktokona | Profile</title>

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
						<h3 class="product-title">Profile</h3>
						<ol class="breadcrumb">
							<li><a href="home.php">Home /</a></li>
							<li class="current">Profile</li>
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
						<?php
							if(isset($updateprofile)){
								echo $updateprofile;
							}
						?>
					<div class="inner-box">
						<div class="tg-contactdetail">
							<div class="dashboard-box">
								<h2 class="dashbord-title">ABOUT</h2>
								<h2 class="dashbord-title float-right"><a href="profile-edit.php">
									<?php
									$s_id = Session::getUser('registered_student_id');
									 $studentdata = $profile->getProfileById($s_id);
									 
									 
									 
									 if($studentdata != NULL){
									?>
									UPDATE PROFILE
									<?php
									 }else{
										 echo '';
									 }
									?>
								
								</a></h2>
							</div>
							
							<?php
								$s_id = Session::getUser('registered_student_id');
								 $studentdata = $profile->getProfileById($s_id);
								 
								 
								 
								 if($studentdata != NULL){
									 while($getrow = $studentdata->fetch_assoc()){
							?>
								<table class="table">
									<tr>
										<td colspan="2">
											<b>ON MY MIND</b><br>
											<?php echo $getrow['seu_profile_text'];?>
										</td>
									</tr>
									<tr>
										<th>Name</th>
										<td><?php echo $getrow['seu_profile_first_name'];?> <?php echo $getrow['seu_profile_last_name'];?></td>
									</tr>
									<tr>
										<th>Gender</th>
										<td><?php echo $getrow['seu_profile_gender'];?></td>
									</tr>
									<tr>
										<th>Department</th>
										<td><?php echo $getrow['seu_profile_department'];?></td>
									</tr>
									
									<tr>
										<th>Blood</th>
										<td><?php echo $getrow['seu_profile_blood_group'];?></td>
									</tr>
									
									<tr>
										<th>Email</th>
										<td><?php echo $getrow['seu_profile_email'];?></td>
									</tr>
									<tr>
										<th>Phone</th>
										<td><?php echo $getrow['registered_student_phone'];?></td>
									</tr>
									<tr>
										<th>Location</th>
										<td><?php echo $getrow['seu_profile_area'];?></td>
									</tr>
								</table>
							<?php
									 }
								 }else{
							?>
									<h5 class="text-center"><a href="profile-create.php">Click here</a> to create profile</h5>
							<?php
									}
							?>
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

<!-- Mirrored from preview.uideck.com/items/classixer/account-profile-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jul 2018 09:05:37 GMT -->
</html>