<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
			<div class="container">

				<div class="navbar-header">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					<span class="lni-menu"></span>
					<span class="lni-menu"></span>
					<span class="lni-menu"></span>
					</button>
					<a href="home.php" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
				</div>
				<div class="collapse navbar-collapse" id="main-navbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="home.php">
								Home
							</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="gallery.php">
								Photo Gallery
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="about.php">
								About 
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="faq.php">
							Faq
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">
							Contact
							</a>
						</li>
					</ul>
					<ul class="sign-in">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
							<div class="dropdown-menu">
								<?php
									if(Session::getUser("userloged") == 'faculty'){
								?>
									<a class="dropdown-item" href="systemapp/faculty/dashboard.php"><i class="lni-user"></i> Profile</a>
								<?php
									}else if(Session::getUser("userloged") == 'student'){
								?>
										<a class="dropdown-item" href="dashboard.php"><i class="lni-user"></i> Profile</a>
								<?php
									}
								?>
								
									<a class="dropdown-item" href="?action=logout"><i class="fa fa-power-off"></i> Logout</a>
																
								<?php
									if (isset($_GET['action'])  && $_GET['action'] == "logout")
									{
										Session::destroyUser();
										
									}
								
								?>
							</div>
						</li>
					</ul>
					<a class="tg-btn" href="request_blood.php">
						<i class="fa fa-tint"></i> Request Blood
					</a>
				</div>
			</div>

			<ul class="mobile-menu">
				<li>
					<a class="active" href="home.php">Home</a>
				</li>
				
				<li>
					<a href="gallery.php">Photo Gallery</a>
				</li>
				
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="faq.php">Faq</a>
				</li>
				<li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a>My Account</a>
					<ul class="dropdown">
						<li><a href="dashboard.php"><i class="lni-user"></i> Profile</a></li>						
						<li><a href="?action=logout"><i class="fa fa-power-off"></i> Logout</a></li>
						<?php
							if (isset($_GET['action'])  && $_GET['action']== "logout")
							{
								Session::destroyUser();
									
							}
						?>
					</ul>
				</li>
				
				<li>
					<a class="tg-btn" style="color:#FFFFFF;margin-bottom:10px;" href="request_blood.php">
						<i class="fa fa-tint"></i> Request Blood
					</a>
				</li>
			</ul>
		</nav>
