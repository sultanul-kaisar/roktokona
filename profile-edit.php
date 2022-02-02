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
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['ProfileEdit'])){
		$s_id = Session::getUser('registered_student_id');
		$updateprofile = $profile->updateProfile($s_id, $_POST);
	}
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
						<h3 class="product-title">Edit Profile</h3>
						<ol class="breadcrumb">
							<li><a href="home.php">Home /</a></li>
							<li class="current">Edit Profile</li>
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
								<h2 class="dashbord-title">Edit Profile</h2>
							</div>
							<?php
								$s_id = Session::getUser('registered_student_id');
								 $studentdata = $profile->getProfileById($s_id);
								 
								 
								 
								 if($studentdata != NULL){
									 while($getrow = $studentdata->fetch_assoc()){
							?>
							<form method="POST">
								<div class="row">

									<div class="col-md-6">
										<label class="control-label">First Name*</label>
										<input class="form-control input-md" name="first_name" type="text" value="<?php echo $getrow['seu_profile_first_name'];?>">
									</div>
									<div class="col-md-6">
										<label class="control-label">Last Name*</label>
										<input class="form-control input-md" name="last_name" type="text" value="<?php echo $getrow['seu_profile_last_name'];?>">
									</div>
									<div class="col-md-6">
										<label class="control-label">Enter Email Address*</label>
										<input class="form-control input-md" name="email" type="text" value="<?php echo $getrow['seu_profile_email'];?>">
									</div>
									<div class="col-md-6">
										<div class="form-group mb-3">
											<strong>Gender:</strong>
											<div class="tg-selectgroup">
												<span class="tg-radio">
													<input type="radio" name="gender" Value="Male" <?php if($getrow['seu_profile_gender'] == 'Male'){echo 'checked';}?>>
													<label for="">Male</label>
												</span>
												<br>
												<span class="tg-radio">
													<input type="radio" name="gender" Value="Female" <?php if($getrow['seu_profile_gender'] == 'Female'){echo 'checked';}?>>
													<label for="">Female</label>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mb-3 tg-inputwithicon">
											<label class="control-label">Blood Group</label>
											<div class="tg-select form-control">
												<select name="blood_group">
													<option value="">Select Blood Group</option>
												
													<option value="A+" <?php if($getrow['seu_profile_blood_group'] == 'A+'){echo 'selected';}?>>A+</option>
													<option value="A-" <?php if($getrow['seu_profile_blood_group'] == 'A-'){echo 'selected';}?>>A-</option>
													<option value="B+" <?php if($getrow['seu_profile_blood_group'] == 'B+'){echo 'selected';}?>>B+</option>
													<option value="B-" <?php if($getrow['seu_profile_blood_group'] == 'B-'){echo 'selected';}?>>B-</option>
													<option value="AB+" <?php if($getrow['seu_profile_blood_group'] == 'AB+'){echo 'selected';}?>>AB+</option>
													<option value="AB−" <?php if($getrow['seu_profile_blood_group'] == 'AB-'){echo 'selected';}?>>AB−</option>
													<option value="O+" <?php if($getrow['seu_profile_blood_group'] == 'O+'){echo 'selected';}?>>O+</option>
													<option value="O-" <?php if($getrow['seu_profile_blood_group'] == 'O-'){echo 'selected';}?>>O-</option>
												</select>
											</div>
										</div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group mb-3 tg-inputwithicon">
											<label class="control-label">Department</label>
											<div class="tg-select form-control">
												<select name="department">
													<option value="">Select Department</option>
													<option value="CSE" <?php if($getrow['seu_profile_department'] == 'CSE'){echo 'selected';}?>>CSE</option>
													<option value="ICE" <?php if($getrow['seu_profile_department'] == 'ICE'){echo 'selected';}?>>ICE</option>
													<option value="EEE" <?php if($getrow['seu_profile_department'] == 'EEE'){echo 'selected';}?>>EEE</option>
													<option value="Textile Engineering" <?php if($getrow['seu_profile_department'] == 'Textile Engineering'){echo 'selected';}?>>Textile Engineering</option>
													<option value="Architecture" <?php if($getrow['seu_profile_department'] == 'Architecture'){echo 'selected';}?>>Architecture</option>
													<option value="Pharmacy" <?php if($getrow['seu_profile_department'] == 'Pharmacy'){echo 'selected';}?>>Pharmacy</option>
													<option value="English" <?php if($getrow['seu_profile_department'] == 'English'){echo 'selected';}?>>English</option>
													<option value="BBA" <?php if($getrow['seu_profile_department'] == 'BBA'){echo 'selected';}?>>BBA</option>
													<option value="Law & Justice" <?php if($getrow['seu_profile_department'] == 'Law & Justice'){echo 'selected';}?>>Law & Justice</option>
													<option value="Islamic Studies" <?php if($getrow['seu_profile_department'] == 'Islamic Studies'){echo 'selected';}?>>Islamic Studies</option>
													<option value="Economics" <?php if($getrow['seu_profile_department'] == 'Economics'){echo 'selected';}?>>Economics</option>
													<option value="Development Studies" <?php if($getrow['seu_profile_department'] == 'Development Studies'){echo 'selected';}?>>Development Studies</option>
													<option value="Bangla" <?php if($getrow['seu_profile_department'] == 'Bangla'){echo 'selected';}?>>Bangla</option>
												</select>
											</div>
										</div>															
									</div>
								</div>
									<div class="form-group mb-3 tg-inputwithicon">
										<label class="control-label">Select Area</label>
										<div class="tg-select form-control">
												<select class="form-control" name="area">
													<option>Location</option>
													<option value="Mirpur" <?php if($getrow['seu_profile_area'] == 'Mirpur'){echo 'selected';}?>>Mirpur</option>
													<option value="Uttara"<?php if($getrow['seu_profile_area'] == 'Uttara'){echo 'selected';}?>>Uttara</option>
													<option value="Dhanmondi"<?php if($getrow['seu_profile_area'] == 'Dhanmondi'){echo 'selected';}?>>Dhanmondi</option>
													<option value="Gulshan"<?php if($getrow['seu_profile_area'] == 'Gulshan'){echo 'selected';}?>>Gulshan</option>
													<option value="Mohammadpur"<?php if($getrow['seu_profile_area'] == 'Mohammadpur'){echo 'selected';}?>>Mohammadpur</option>
													<option value="Badda"<?php if($getrow['seu_profile_area'] == 'Badda'){echo 'selected';}?>>Badda</option>
													<option value="Banani"<?php if($getrow['seu_profile_area'] == 'Banani'){echo 'selected';}?>>Banani</option>
													<option value="Banani DOHS"<?php if($getrow['seu_profile_area'] == 'Banani DOHS'){echo 'selected';}?>>Banani DOHS</option>
													<option value="Banglamotor"<?php if($getrow['seu_profile_area'] == 'Banglamotor'){echo 'selected';}?>>Banglamotor</option>
													<option value="Bangshal"<?php if($getrow['seu_profile_area'] == 'Bangshal'){echo 'selected';}?>>Bangshal</option>
													<option value="Baridhara"<?php if($getrow['seu_profile_area'] == 'Baridhara'){echo 'selected';}?>>Baridhara</option>
													<option value="Basabo"<?php if($getrow['seu_profile_area'] == 'Basabo'){echo 'selected';}?>>Basabo</option>
													<option value="Basundhara"<?php if($getrow['seu_profile_area'] == 'Basundhara'){echo 'selected';}?>>Basundhara</option>
													<option value="Cantonment"<?php if($getrow['seu_profile_area'] == 'Cantonment'){echo 'selected';}?>>Cantonment</option>
													<option value="Chaukbazar"<?php if($getrow['seu_profile_area'] == 'Chaukbazar'){echo 'selected';}?>>Chaukbazar</option>
													<option value="Demra"<?php if($getrow['seu_profile_area'] == 'Demra'){echo 'selected';}?>>Demra</option>
													<option value="Dhamrai"<?php if($getrow['seu_profile_area'] == 'Dhamrai'){echo 'selected';}?>>Dhamrai</option>
													<option value="Dohar"<?php if($getrow['seu_profile_area'] == 'Dohar'){echo 'selected';}?>>Dohar</option>
													<option value="Elephant Road"<?php if($getrow['seu_profile_area'] == 'Elephant Road'){echo 'selected';}?>>Elephant Road</option>
													<option value="Hazaribagh"<?php if($getrow['seu_profile_area'] == 'Hazaribagh'){echo 'selected';}?>>Hazaribagh</option>
													<option value="Jatrabari"<?php if($getrow['seu_profile_area'] == 'Jatrabari'){echo 'selected';}?>>Jatrabari</option>
													<option value="Kafrul"<?php if($getrow['seu_profile_area'] == 'Kafrul'){echo 'selected';}?>>Kafrul</option>
													<option value="Kamrangirchar"<?php if($getrow['seu_profile_area'] == 'Kamrangirchar'){echo 'selected';}?>>Kamrangirchar</option>
													<option value="Kawranbazar"<?php if($getrow['seu_profile_area'] == 'Kawranbazar'){echo 'selected';}?>>Kawranbazar</option>
													<option value="Keraniganj"<?php if($getrow['seu_profile_area'] == 'Keraniganj'){echo 'selected';}?>>Keraniganj</option>
													<option value="Khilgaon"<?php if($getrow['seu_profile_area'] == 'Khilgaon'){echo 'selected';}?>>Khilgaon</option>
													<option value="Khilkhet"<?php if($getrow['seu_profile_area'] == 'Khilkhet'){echo 'selected';}?>>Khilkhet</option>
													<option value="Kotowali"<?php if($getrow['seu_profile_area'] == 'Kotowali'){echo 'selected';}?>>Kotowali</option>
													<option value="Lalbag"<?php if($getrow['seu_profile_area'] == 'Lalbag'){echo 'selected';}?>>Lalbag</option>
													<option value="Malibag"<?php if($getrow['seu_profile_area'] == 'Malibag'){echo 'selected';}?>>Malibag</option>
													<option value="Mirpur DOHS"<?php if($getrow['seu_profile_area'] == 'Mirpur DOHS'){echo 'selected';}?>>Mirpur DOHS</option>
													<option value="Mogbazar"<?php if($getrow['seu_profile_area'] == 'Mogbazar'){echo 'selected';}?>>Mogbazar</option>
													<option value="Mohakhali"<?php if($getrow['seu_profile_area'] == 'Mohakhali'){echo 'selected';}?>>Mohakhali</option>
													<option value="Mohakhali DOHS"<?php if($getrow['seu_profile_area'] == 'Mohakhali DOHS'){echo 'selected';}?>>Mohakhali DOHS</option>
													<option value="Motijheel"<?php if($getrow['seu_profile_area'] == 'Motijheel'){echo 'selected';}?>>Motijheel</option>
													<option value="Nawabganj"<?php if($getrow['seu_profile_area'] == 'Nawabganj'){echo 'selected';}?>>Nawabganj</option>
													<option value="New Market"<?php if($getrow['seu_profile_area'] == 'New Market'){echo 'selected';}?>>New Market</option>
													<option value="Paltan"<?php if($getrow['seu_profile_area'] == 'Paltan'){echo 'selected';}?>>Paltan</option>
													<option value="Purbachal"<?php if($getrow['seu_profile_area'] == 'Purbachal'){echo 'selected';}?>>Purbachal</option>
													<option value="Ramna"<?php if($getrow['seu_profile_area'] == 'Ramna'){echo 'selected';}?>>Ramna</option>
													<option value="Rampura" <?php if($getrow['seu_profile_area'] == 'Rampura'){echo 'selected';}?>>Rampura</option>
													<option value="Savar" <?php if($getrow['seu_profile_area'] == 'Savar'){echo 'selected';}?>>Savar</option>
													<option value="Shajahanpur"<?php if($getrow['seu_profile_area'] == 'Shajahanpur'){echo 'selected';}?>>Shajahanpur</option>
													<option value="Sutrapur"<?php if($getrow['seu_profile_area'] == 'Sutrapur'){echo 'selected';}?>>Sutrapur</option>
													<option value="Tejgaon"<?php if($getrow['seu_profile_area'] == 'Tejgaon'){echo 'selected';}?>>Tejgaon</option>
													<option value="Tongi"<?php if($getrow['seu_profile_area'] == 'Tongi'){echo 'selected';}?>>Tongi</option>
													<option value="Wari"<?php if($getrow['seu_profile_area'] == 'Wari'){echo 'selected';}?>>Wari</option>
												</select>
											
										</div>
									</div>									
									<div class="form-group md-3">
										<label class="control-label">Say Something About Yourself</label>
										<textarea name="text" class="form-control" placeholder="What's on your mind?"><?php echo $getrow['seu_profile_text'];?></textarea>
									</div>														
						</div>
						
						<button class="btn btn-common btn-block" name="ProfileEdit" type="button ">Save</button>
					</form>
					<?php
							}
						}
					?>
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