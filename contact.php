<?php 
include "connection.php";
include "site_session.php";
$_SESSION['cs']="c-active";
include "header.php";
?>
<!-- BEGIN: PAGE CONTAINER -->
<div style="padding-top:8%;"></div>
<div class="c-layout-page">
	<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
	<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold">AL-KURDEE TRADERS</h3>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="index.php">Al-Kurdee</a>
				</li>
				<li>
					/
				</li>
				<li class="c-state_active">
					We Serve You.!
				</li>
			</ul>
		</div>
	</div>
	<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
	<!-- BEGIN: PAGE CONTENT -->
	<!-- BEGIN: CONTENT/CONTACT/CONTACT-1 -->
	<div class="c-content-box c-size-md c-bg-img-top c-no-padding c-pos-relative">
		<div class="container">
			<div class="c-content-contact-1 c-opt-1">
				<div class="row" data-auto-height=".c-height">
					<div class="col-sm-8 c-desktop">
					</div>
					<div class="col-sm-4">
						<div class="c-body">
							<div class="c-section">
								<h3>AL-KURDEE Traders.</h3>
							</div>
							<div class="c-section">
								<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">
									Address
								</div>
								<p>
									Plot No 110, Sindhi Muslim Society,<br/>Block B Near Gora Qabristan Stop,<br/>Sharah-e-Faisal Karachi, Pakistan.
								</p>
							</div>
							<div class="c-section">
								<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">
									Contacts
								</div>
								<p>
									<strong>T</strong> 92-341-1868571<br/><strong>T</strong> 92-321-9235918
								</p>
							</div>
							<div class="c-section">
								<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">
									Social
								</div>
								<br/>
								<ul class="c-content-iconlist-1 c-theme">
									<li>
										<a href="https://www.twitter.com/alkurdetraders"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="https://www.facebook.com/Al-Kurdee-Traders-Recruitment-Agency-235401973800420/"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="https://www.linkedin.com/in/al-kurdee-traders-manpower-solutions-543b45170/"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="" class="c-content-contact-1-gmap" style="height: 615px;">
        
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7240.232143175225!2d67.05112042512266!3d24.85988498621654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e831e509dc3%3A0xf11bd7426d366a61!2sSindhi+Muslim+Cooperative+Housing+Society+Karachi%2C+Karachi+City%2C+Sindh!5e0!3m2!1sen!2s!4v1539000773144" style="border:0; height: 590px; width: 100%;"></iframe>
		</div>
	</div>
	<!-- END: CONTENT/CONTACT/CONTACT-1 -->
	<!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
	<div class="c-content-box c-size-md c-bg-white">
		<div class="container">
			<div class="c-content-feedback-1 c-option-1">
				<div class="row">
					<div class="col-md-6">
						<div class="c-container c-bg-green c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_1.png)">
							<div class="c-content-title-1 c-inverse">
								<h3 class="c-font-uppercase c-font-bold">Boost Your Future?</h3>
								<div class="c-line-left">
								</div>
								<p class="c-font-lowercase">
									Try visiting our Website to know about best carrier opportunities .
								</p>
								<a href="#" class="btn btn-md c-btn-border-2x c-btn-white c-btn-uppercase c-btn-square c-btn-bold">Learn More</a>
							</div>
						</div>
						<div class="c-container c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_2.png)">
							<div class="c-content-title-1">
								<h3 class="c-font-uppercase c-font-bold">Have a question?</h3>
								<div class="c-line-left">
								</div>
								
								<p>
									Feel free to ask quires. Ask your questions away and let our dedicated customer service help you look through to get your questions answered!
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="c-contact">
							<div class="c-content-title-1">
								<h3 class="c-font-uppercase c-font-bold">Keep in touch</h3>
								<div class="c-line-left">
								</div>
								<p class="c-font-lowercase">
									Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.
								</p>
							</div>
							<form action="contact.php" method="POST">
								<div class="form-group">
									<input type="text" placeholder="Your Name" name="sname" class="form-control c-square c-theme input-lg">
								</div>
								<div class="form-group">
									<input type="email" placeholder="Your Email" name="semail" class="form-control c-square c-theme input-lg">
								</div>
								<div class="form-group">
									<input type="text" placeholder="Contact Phone" name="sphone" class="form-control c-square c-theme input-lg">
								</div>
								<div class="form-group">
									<textarea rows="8" name="smessage" placeholder="Write message here ..." class="form-control c-theme c-square input-lg"></textarea>
								</div>
								<input type="submit" name="ok" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">
							</form>
							<?php
							if (isset($_POST['ok'])){
								$n=$_POST['sname'];
								$e=$_POST['semail'];
								$p=$_POST['sphone'];
								$s=$_POST['smessage'];							
								$sql="INSERT INTO `message`( `r_name`, `r_email`, `r_contact`, `r_txt`, `r_time`) VALUES ('$n','$e','$p','$s', NOW() )";
									if(mysqli_query($con, $sql)){
										$message = "Message received. We will contact you shortly.";
										echo "<script type='text/javascript'>alert('$message'); </script>";
										
									} else{
										
										$message = "Message not received. Please try again later.";
										echo "<script type='text/javascript'>alert('$message'); </script>";
									}
							}
							
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTENT/CONTACT/FEEDBACK-1 -->
	<!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<?php
include "footer.php";
?>
<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="assets/base/js/components.js" type="text/javascript"></script>
<script src="assets/base/js/app.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script src="//maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
<script src="assets/base/js/scripts/pages/contact-2.js" type="text/javascript"></script>
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>