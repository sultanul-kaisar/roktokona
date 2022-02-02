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
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['searchStudentID'])){
		
		$identifystudent = $register->searchStudent($_POST);
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
						if(isset($identifystudent)){
							echo $identifystudent;
						}
					?>
                    <form method="POST">
                        <div class="form-group">
                            <label style="color: #0e153f;display:block;text-align:center;">Find Your ID</label>
                            <input type="number" name="student_id" class="form-control" placeholder="Enter your valid ID">
                        </div>
                       
                        <button type="submit" name="searchStudentID" class="btn btn-primary btn-flat m-b-30 m-t-30">Contunue</button>
                        
						<div class="register-link m-t-15 text-center" style="margin-top:10px;">
                            <p>Already have account ? <a href="index.php"> Signin Here</a></p>
                        </div>
                    </form>
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
