<?php
    ob_start();
	include 'core/Session.php';
	Session::checkUserSession();
	
	require 'core/Database.php';
	require 'core/Format.php';
	require 'class/Profile.php';
	
	
	//require 'core/Format.php';
	
	$db = new Database();
	$fm = new Format();
	$profile = new Profile();
?>

<?php
		$s_id = Session::getUser('registered_student_id');
		$studentdata = $profile->getProfileById($s_id);
	 
	 
	 
		if($studentdata != NULL){
?>
	<h1 style="text-align:center;">404 NOT FOUND</h1>
<?php	
			exit();
		}
?>
							
<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['ProfileCreate'])){
	   
		$createprofile = $profile->createProfile($s_id,$_POST);
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
						<h3 class="product-title">Create Profile</h3>
						<ol class="breadcrumb">
							<li><a href="home.php">Home /</a></li>
							<li class="current">Create Profile</li>
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
						<?php
							if(isset($createprofile)){
								echo $createprofile;
							}
						?>
					<div class="inner-box">
						<div class="tg-contactdetail">
							<div class="dashboard-box">
								<h2 class="dashbord-title">Create Profile</h2>
							</div>
							
							<form method="POST">
								<div class="row">

									<div class="col-md-6">
										<label class="control-label">First Name*</label>
										<input class="form-control input-md" name="first_name" type="text">
									</div>
									<div class="col-md-6">
										<label class="control-label">Last Name*</label>
										<input class="form-control input-md" name="last_name" type="text">
									</div>
									<div class="col-md-6">
										<label class="control-label">Enter Email Address*</label>
										<input class="form-control input-md" name="email" type="text">
									</div>
									<div class="col-md-6">
										<div class="form-group mb-3">
											<strong>Gender:</strong>
											<div class="tg-selectgroup">
												<span class="tg-radio">
													<input type="radio" name="gender" Value="Male">
													<label for="">Male</label>
												</span>
												<br>
												<span class="tg-radio">
													<input type="radio" name="gender" Value="Female">
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
									</div>
								
									<div class="col-md-6">
										<div class="form-group mb-3 tg-inputwithicon">
											<label class="control-label">Department</label>
											<div class="tg-select form-control">
												<select name="department">
													<option value="">Select Department</option>
													<option value="CSE">CSE</option>
													<option value="ICE">ICE</option>
													<option value="EEE">EEE</option>
													<option value="Textile Engineering">Textile Engineering</option>
													<option value="Architecture">Architecture</option>
													<option value="Pharmacy">Pharmacy</option>
													<option value="English">English</option>
													<option value="BBA">BBA</option>
													<option value="Law & Justice">Law & Justice</option>
													<option value="Islamic Studies">Islamic Studies</option>
													<option value="Economics">Economics</option>
													<option value="Development Studies">Development Studies</option>
													<option value="Bangla">Bangla</option>
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
													<option value="Mirpur">Mirpur</option>
													<option value="Uttara">Uttara</option>
													<option value="Dhanmondi">Dhanmondi</option>
													<option value="Gulshan">Gulshan</option>
													<option value="Mohammadpur">Mohammadpur</option>
													<option value="Badda">Badda</option>
													<option value="Banani">Banani</option>
													<option value="Banani DOHS">Banani DOHS</option>
													<option value="Banglamotor">Banglamotor</option>
													<option value="Bangshal">Bangshal</option>
													<option value="Baridhara">Baridhara</option>
													<option value="Basabo">Basabo</option>
													<option value="Basundhara">Basundhara</option>
													<option value="Cantonment">Cantonment</option>
													<option value="Chaukbazar">Chaukbazar</option>
													<option value="Demra">Demra</option>
													<option value="Dhamrai">Dhamrai</option>
													<option value="Dohar">Dohar</option>
													<option value="Elephant Road">Elephant Road</option>
													<option value="Hazaribagh">Hazaribagh</option>
													<option value="Jatrabari">Jatrabari</option>
													<option value="Kafrul">Kafrul</option>
													<option value="Kamrangirchar">Kamrangirchar</option>
													<option value="Kawranbazar">Kawranbazar</option>
													<option value="Keraniganj">Keraniganj</option>
													<option value="Khilgaon">Khilgaon</option>
													<option value="Khilkhet">Khilkhet</option>
													<option value="Kotowali">Kotowali</option>
													<option value="Lalbag">Lalbag</option>
													<option value="Malibag">Malibag</option>
													<option value="Mirpur DOHS">Mirpur DOHS</option>
													<option value="Mogbazar">Mogbazar</option>
													<option value="Mohakhali">Mohakhali</option>
													<option value="Mohakhali DOHS">Mohakhali DOHS</option>
													<option value="Motijheel">Motijheel</option>
													<option value="Nawabganj">Nawabganj</option>
													<option value="New Market">New Market</option>
													<option value="Paltan">Paltan</option>
													<option value="Purbachal">Purbachal</option>
													<option value="Ramna">Ramna</option>
													<option value="Rampura">Rampura</option>
													<option value="Savar" >Savar</option>
													<option value="Shajahanpur">Shajahanpur</option>
													<option value="Sutrapur">Sutrapur</option>
													<option value="Tejgaon">Tejgaon</option>
													<option value="Tongi">Tongi</option>
													<option value="Wari">Wari</option>
												</select>
											
										</div>
									</div>									
									<div class="form-group md-3">
										<label class="control-label">Say Something About Yourself</label>
										<textarea name="text" class="form-control" placeholder="What's on your mind?"></textarea>
									</div>														
						</div>
						
						
						<button class="btn btn-common btn-block" name="ProfileCreate" type="button ">Save</button>
					</form>
					
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