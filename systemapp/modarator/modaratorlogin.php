<?php
ob_start();
	include('class/Modaratorlogin.php');
	
	$db = new Database();
	$fm = new Format();
	
	$lg = new Modaratorlogin();
?>
<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['modaratorLogin'])){
		if (isset($_POST['registered_modarator_id']) && isset($_POST['registered_modarator_password'])){
		$registered_modarator_id =$_POST['registered_modarator_id'];
		$registered_modarator_password =md5($_POST['registered_modarator_password']);

		$modaratorlogin = $lg->userLogin($registered_modarator_id,$registered_modarator_password);
		}
	}
?>
<!doctype html>
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
                        <img class="align-content" src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
					<?php
						if(isset($studentlogin)){
							echo $studentlogin;
						}
					?>
                    <form method="POST">
                        <div class="form-group">
                            <label style="color: #0e153f;display:block;text-align:center;">Moderator Id</label>
                            <input type="text" class="form-control" name="moderator_id" placeholder="Enter your Moderator ID">
                        </div>
                        <div class="form-group">
                            <label style="color: #0e153f;display:block;text-align:center;">Password</label>
                            <input type="password" class="form-control" name="moderator_password" placeholder="Enter your Password">
                        </div>

                        <div class="checkbox">
							
                            <label class="pull-right mr-3">
                                <a href="forgetpassword.php">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" name="studentLogin" class="btn btn-common2 btn-flat m-b-30 m-t-30">Sign in</button>
                       
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
