<?php
ob_start();
	include('../../core/Database.php');
	include('../../core/Format.php');
	include('class/FacultyLogin.php');

	
	$db = new Database();
	$fm = new Format();
	
	$flg = new FacultyLogin();
?>
<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['facultyLogin'])){
		

		$facultylogin = $flg->userLogin($_POST);
		
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
						if(isset($facultylogin)){
							echo $facultylogin;
						}
					?>
                    <form method="POST">
                        <div class="row-mb-6">
                            <label style="color: #0e153f;display:block;text-align:center;">Faculty Initial</label>
                            <input type="text" class="form-control" name="faculty_id" placeholder="Enter your Initial">
                        </div>
						
							<div class="row-mb-6">
							<label style="color: #0e153f;display:block;text-align:center;">Department</label>
								<div class="tg-select">
									<select name="faculty_department" class="form-control">
										<option value="">Select Department</option>
										<option value="CSE" >CSE</option>
										<option value="ICE" >ICE</option>
										<option value="EEE" >EEE</option>
										<option value="Textile Engineering" >Textile Engineering</option>
										<option value="Architecture" >Architecture</option>
										<option value="Pharmacy" >Pharmacy</option>
										<option value="English" >English</option>
										<option value="BBA" >BBA</option>
										<option value="Law & Justice" >Law & Justice</option>
										<option value="Islamic Studies" >Islamic Studies</option>
										<option value="Economics" >Economics</option>
										<option value="Development Studies" >Development Studies</option>
										<option value="Bangla" >Bangla</option>
									</select>
									
								</div>
							</div>															
						
							
                        <div class="row-mb-6">
                            <label style="color: #0e153f;display:block;text-align:center;">Password</label>
                            <input type="password" class="form-control" name="faculty_password" placeholder="Enter your Password">
                        </div>

							<br>

                        
                        <button type="submit" name="facultyLogin" class="btn btn-common2 btn-flat m-b-30 m-t-30">Sign in</button>
                       
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
