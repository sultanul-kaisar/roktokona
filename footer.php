
<!-- Modal -->
<div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
		<form method="POST" enctype="multipart/form-data">
			<div class="file-upload">
				<div class="image-upload-wrap">
					<input class="file-upload-input" type='file' onchange="readURL(this);" name="useravatar" accept="image/*" />
					<div class="drag-text">
					  <h3>Drag and drop a file or select add Image</h3>
					</div>
				</div>
				<div class="file-upload-content">
					<img class="file-upload-image" src="#" alt="your image" />
					<div class="image-title-wrap">
						<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
					</div>
				</div>
			</div>
			<button class="btn btn-primary btn-block" type="submit" name="ChangeProfile">Change</button>
		</form>
      </div>
    </div>
  </div>
</div>

<footer>

		<section class="footer-Content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
						<div class="widget">
							<h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>
							<div class="textwidget">
								<p>A single pint can save three lives, a single gesture can create a million smiles</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
						<div class="widget">
							<h3 class="block-title">Latest Campaigns</h3>
							<ul class="media-content-list">
								<li>
									<div class="media-left">
										<img class="img-fluid" src="assets/img/featured/c1.jpg" alt="">
										
									</div>
									<div class="media-body">
										<h4 class="post-title"><a href="ads-details.html">Blood for life</a></h4>
										<span class="date">12 Jan 2018</span>
									</div>
								</li>
								<li>
									<div class="media-left">
										<img class="img-fluid" src="assets/img/featured/c2.jpg" alt="">
										
									</div>
									<div class="media-body">
										<h4 class="post-title"><a href="ads-details.html">Donate blood</a></h4>
										<span class="date">28 Mar 2018</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<div class="widget">
					<h3 class="block-title">Help & Support</h3>
					<ul class="menu">
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Support</a></li>
					</ul>
					</div>
					</div>
					
					<ul class="footer-social">
					<li><a class="facebook" href="https://www.facebook.com/Roktokona-355430821900432" target="_blank"><i class="lni-facebook-filled"></i></a></li>
					<li><a class="google-plus" href="https://plus.google.com/u/1/111652141797016155325" target="_blank"><i class="lni-google-plus"></i></a></li>
					<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
					<li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
					</ul>
					</div>
					</div>
				</div>
			</div>
		</section>


		<div id="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="site-info">
							<p style="text-align:center;">All copyrights reserved &copy; 2018 - Developed by <a href="#" rel="nofollow">Kaisar & Team</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

</footer>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>
