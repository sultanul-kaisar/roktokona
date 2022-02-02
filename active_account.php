<?php
ob_start();
	require 'core/Database.php';
	require 'core/Format.php';
	require 'class/Registration.php';
	
	
	//require 'core/Format.php';
	
	$db = new Database();
	$fm = new Format();
	$register = new Registration();
?>

<?php
	if(!isset($_GET['initiate']) || $_GET['initiate'] == NULL || !isset($_GET['phone']) || $_GET['phone'] == NULL){
		echo "<script>window.location = 'registration_search.php';</script>";
	}else{
		$initiate = preg_replace('/[^-a-zA-Z0-9_]/', '',$_GET['initiate']);
		$phone = preg_replace('/[^-a-zA-Z0-9_]/', '',$_GET['phone']);
	}
?>


<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['activeStudentID'])){
		
		$activatestudent = $register->activateStudent($initiate,$phone,$_POST);
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $fm->title();?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="login/assets/css/normalize.css">
    <link rel="stylesheet" href="login/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="login/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="login/assets/css/themify-icons.css">
    <link rel="stylesheet" href="login/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="login/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="login/assets/scss/style.css">
	<link rel="stylesheet" href="assets/css/custom.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark auth-bg-1">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
					<?php
						if(isset($activatestudent)){
							echo $activatestudent;
						}
					?>
					<?php
						if(isset($initiate) && isset($phone)){
							$initiate = $initiate;
							$phone= $phone;
							$getvelidrequest = $register->getValidVerificationRequest($initiate,$phone);
							
							if($getvelidrequest != NULL){
							$getstudentrow = $getvelidrequest->fetch_assoc();
								$valid_phone = substr($getstudentrow['registration_verification_stuednt_phone'], -2);
								
								if($getstudentrow['registration_verification_code'] != NULL){
					?>
									<form method="POST">
										<div class="form-group">
											<label>Student ID</label>
											<input disabled type="number" class="form-control" placeholder="<?php echo $initiate;?>">
										</div>
										
										<div class="form-group">
											<label>Phone</label>
											<input disabled type="number" class="form-control" placeholder="+***********<?php echo $valid_phone;?>">
										</div>
										
										<div class="form-group">
											<label>Activation code</label>
											<input type="number" class="form-control" name="registration_verification_code" placeholder="Enter activation code">
										</div>
										
										<button type="submit" name="activeStudentID" class="btn btn-primary btn-flat m-b-30 m-t-30">Active</button>
									</form>
					<?php
								}
							}else{
					?>
							<div class="login-form">
								<div class='alert alert-danger'>
									<h5 align='center'>Invalid request!</h5>
								</div>
								
								<div class="register-link m-t-15 text-center">
									<a href="registration_search.php"> Back</a></p>
								</div>
							</div>
					<?php
							}
						}
					?>		
                </div>
            </div>
        </div>
    </div>


    <script src="login/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="login/assets/js/popper.min.js"></script>
    <script src="login/assets/js/plugins.js"></script>
    <script src="login/assets/js/main.js"></script>


</body>
</html>
