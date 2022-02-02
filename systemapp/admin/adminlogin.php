<?php
	ob_start();
	include 'class/Adminlogin.php';
	$db = new Database();
?>

<?php 
	$al = new Adminlogin();
	if($_SERVER['REQUEST_METHOD']== 'POST'){
	    if (isset($_POST['admin_username']) && isset($_POST['admin_password'])){
		$admin_username =$_POST['admin_username'];
		$admin_password =md5($_POST['admin_password']);
		$loginChk = $al->adminLogin($admin_username,$admin_password);
		}
	
	}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->S
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin Login</title>
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
                        <img class="align-content" src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
					<?php
				
						if (isset($loginChk)){
							echo $loginChk;
						}
					?>
                    <form method="POST">
                        <div class="form-group">
                            <label style="color: #0e153f;display:block;text-align:center;">Admin ID</label>
                            <input type="text" class="form-control" name="admin_username" placeholder="Enter your Admin ID">
                        </div>
                        <div class="form-group">
                            <label style="color: #0e153f;display:block;text-align:center;">Password</label>
                            <input type="password" class="form-control" name="admin_password" placeholder="Enter your Password">
                        </div>

                        
                        <button type="submit" name="AdminLogin" class="btn btn-common2 btn-flat m-b-30 m-t-30">Log In</button>
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
<?php ob_flush();?>