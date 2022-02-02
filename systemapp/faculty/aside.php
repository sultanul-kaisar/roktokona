<aside>
						<div class="sidebar-box">
							<div class="user">
								<figure>
									<a href="#"><img src="assets/img/author/img1.jpg" alt=""></a>
								</figure>
								<div class="usercontent">
									<h4>
										<?php
											$s_id = Session::getUser('registered_student_id');
											echo $s_id;
										?>
									</h4>
									<h4>STUDENT</h4>
								</div>
							</div>
							<nav class="navdashboard">
								<ul>
									<li>
										<a href="dashboard.php">
											<i class="lni-dashboard"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a class="active" href="profile.php">
											<i class="lni-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li>
										<a href="account-myads.html">
											<i class="lni-layers"></i>
											<span>My Blood Request</span>
										</a>
									</li>
									<li>
										<a href="messages.php">
											<i class="lni-envelope"></i>
											<span>Messages</span>
										</a>
									</li>									
									<li>
										<a href="feedback.php">
											<i class="lni-envelope"></i>
											<span>Feedback</span>
										</a>
									</li>
									<li>
										<a href="update_donation.php">
											<i class="fa fa-calendar"></i>
											<span>Update Donation Details</span>
										</a>
									</li>
									</li>
										<li>
										<a href="change_password.php">
											<i class="lni-key"></i>
											<span>Change Password</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</aside>