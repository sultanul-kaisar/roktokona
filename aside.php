<aside>
						<div class="sidebar-box">
							<div class="user">
								<figure data-toggle="modal" data-target="#changeImage">
									<?php
										$s_id_img = Session::getUser('registered_student_id');
										
										$getimage = $profile->getProfileImage($s_id_img);
										
										if($getimage != NULL){
											
											$proimage = $getimage->fetch_assoc();
											$imgname = $proimage['profile_image'];
											if (file_exists('assets/img/author/'.$imgname)) {
											
									?>
										<a href="#"><img src="assets/img/author/<?php echo $proimage['profile_image'];?>" alt=""></a>
									<?php
											}else{
									?>
									<a href="#"><img src="assets/img/author/default-avatar.png" alt="" width="80px"></a>
									
									<?php
											}
										}else{
									?>
									<a href="#"><img src="assets/img/author/default-avatar.png" alt="" width="80px"></a>
									<?php
										}
									?>
									
									<a class="profile-hover" href="#"><img style="width:80px;" src="assets/img/author/image-change-160.png" alt=""></a>
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
							<div style="padding:10px 10px 28px 10px">
								Last Donastion: 
								<?php
								$getlastdonation = $donor->GetLastDonationHistory($s_id);
							
							if($getlastdonation != NULL){
								$rowlastdonation = $getlastdonation->fetch_assoc();
								
								if($fm->getDay($rowlastdonation['donation_date']) == 0){
									
									$day = $fm->getDay($rowlastdonation['donation_date']);
									echo " Today";
									
								}else if($fm->getDay($rowlastdonation['donation_date']) > 0 && $fm->getDay($rowlastdonation['donation_date']) <= 30){
									
									$day = $fm->getDay($rowlastdonation['donation_date']);
									echo $day." Days ago";
									
								}else if(($fm->getDay($rowlastdonation['donation_date']) > 30) && ($fm->getDay($rowlastdonation['donation_date']) < 60)){
									$month = $fm->getMonth($rowlastdonation['donation_date']);
									echo $month." Month ago";
								}else if(($fm->getDay($rowlastdonation['donation_date']) >= 60) &&  ($fm->getDay($rowlastdonation['donation_date']) < 365)){
									$month = $fm->getMonth($rowlastdonation['donation_date']);
									echo $month." Months ago";
								}else if(($fm->getDay($rowlastdonation['donation_date']) > 365) &&  ($fm->getDay($rowlastdonation['donation_date']) < 730)){
									$month = $fm->getYear($rowlastdonation['donation_date']);
									echo $month." Year ago";
								}else if(($fm->getDay($rowlastdonation['donation_date']) > 730)){
									$month = $fm->getYear($rowlastdonation['donation_date']);
									echo $month." Years ago";
								}
							}else{
								echo 'No Data';
							}
						?>
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