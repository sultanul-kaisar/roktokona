<?php
    ob_start();
	include 'core/Session.php';
	Session::checkUserSession();
	
	require 'core/Database.php';
	require 'core/Format.php';
	require 'class/Blood.php';
	
	
	//require 'core/Format.php';
	
	$db = new Database();
	$fm = new Format();
	$blood = new Blood();
?>
<?php
	if(!isset($_GET['dept']) || $_GET['dept'] == NULL){
		echo "<script>window.location = 'home.php';</script>";
	}else{
		$dept = preg_replace('/[^-a-zA-Z0-9_]/', '',$_GET['dept']);
	}
?>
<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['RequestBlood'])){
		
		$bloodrequest = $blood->requestBloodByID($_POST);
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Roktokona | Blood By Department</title>

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
		
		<script type="text/javascript">
			function FormPopup(id) {
				 
				 document.getElementById("uid").innerHTML = "<input type='hidden' name='user_id' value='"+id+"'/>";
				 
				// $("#hdcode").val(department_code);

				 $("#myModal_show").modal('show');
			}
		</script>
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
							<h3 class="product-title">Blood By Department</h3>
							<ol class="breadcrumb">
								<li><a href="home.php">Home /</a></li>
								<li class="current"><?php echo $dept;?></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			if(isset($bloodrequest)){
				echo $bloodrequest;
			}
		?>
		<section class="categories-icon section-padding bg-drack">
			<div class="container">
				<div class="row">
					<?php
						if(isset($dept)){
							$dept =$dept;
						}
						$getstudent = $blood->getDonorBydept($dept);
							if($getstudent !=NULL){
								while($row = $getstudent->fetch_assoc()){
					?>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 p-4">
						<div class="icon-box">
							<h4><?php echo $row['seu_profile_first_name'];?> <?php echo $row['seu_profile_last_name'];?></h4>
							<span class="d-block text-white text-center"><?php echo $row['seu_profile_area'];?></span>
							<?php
									if(Session::getUser('registered_student_id') == $row['seu_profile_user']){
							?>
							<button class="btn btn-primary btn-block mt-3 mb-3 disabled" disabled>
								Request Disabled
							</button>
							<?php
									}else{
							?>
							<button class="btn btn-primary btn-block mt-3 mb-3" onclick="FormPopup(<?php echo $row['seu_profile_user'];?>)">
								Request Blood
							</button>
							<?php
									}
							?>
							
						</div>
					</div>
					<?php
								}
							}
					?>
				</div>
			</div>
		</section>
			
	
		<!--ACTIVE DATA-->
		<div class="modal fade" id="myModal_show" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
							<div class="inner-box">
							<div class="tg-contactdetail">
								<div class="dashboard-box">
									<h2 class="dashbord-title">Blood Request Details</h2>
								</div>
								<form method="POST">
								<span id="uid"></span>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group mb-3">
											<label class="control-label">Enter Patient Name</label>
											<input class="form-control input-md" name="name" type="text">
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group mb-3 tg-inputwithicon">
										<label class="control-label">Select Area</label>
										<div class="form-group">
											<div class="select">
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
													<option value="Savar">Savar</option>
													<option value="Shajahanpur">Shajahanpur</option>
													<option value="Sutrapur">Sutrapur</option>
													<option value="Tejgaon">Tejgaon</option>
													<option value="Tongi">Tongi</option>
													<option value="Wari">Wari</option>
												</select>
											</div>
										</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group mb-3">
											<strong>Patient is:</strong>
											<div class="tg-selectgroup">
												<span class="tg-radio">
													<input id="tg-sameuser" type="radio" name="gender" Value="Male" checked>
													<label for="tg-sameuser">Male</label>
												</span>
												<br>
												<span class="tg-radio">
													<input id="tg-someoneelse" type="radio" name="gender" Value="Female">
													<label for="tg-someoneelse">Female</label>
												</span>
											</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group mb-3">
											<label class="control-label">Enter Contact Number</label>
											<input class="form-control input-md" name="phone" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mb-3">
											<label class="control-label">Enter Date</label>
											<input class="form-control input-md" name="date" type="date">
										</div>
									</div>
								</div>
								
								<div class="form-group mb-3">
									<label class="control-label">Hospital Name</label>
									<input class="form-control input-md" name="h_name" type="text">
								</div>
								<div class="form-group mb-3">
									<label class="control-label">Enter Hospital Address</label>
									<input class="form-control input-md" name="h_address" type="text">
								</div>
								
								<button class="btn btn-common btn-block" name="RequestBlood" type="button ">Requst Now</button>
								</form>
							</div>
						</div>
					
					</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
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