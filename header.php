<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.5
Version: 1.0.0
Author: Themehats
Site: http://www.themehats.com
Contact: support@themehats.com
Follow: www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Al-Kurdee Traders</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
<link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN: BASE PLUGINS  -->
<link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- END: BASE PLUGINS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
<link href="assets/base/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body class="c-layout-header-fixed c-layout-header-fullscreen c-layout-header-topbar">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-2 c-layout-header-default-mobile">
<div class="c-navbar">
	<div class="container">
		<!-- BEGIN: BRAND -->
		<div class="c-navbar-wrapper clearfix">
			<div class="c-brand c-pull-left">
				<a href="index.html" class="c-logo">
				<img src="assets/base/img/content/client-logos/alkur.png" alt="JANGO" class="c-desktop-logo">
				<img src="assets/base/img/content/client-logos/alkur.png" alt="JANGO" class="c-desktop-logo-inverse">
				<img src="assets/base/img/content/client-logos/alkur.png" alt="JANGO" class="c-mobile-logo">
				</a>
				<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
				<span class="c-line"></span>
				<span class="c-line"></span>
				<span class="c-line"></span>
				</button>
				<button class="c-search-toggler" type="button">
				<i class="fa fa-search"></i>
				</button>
			</div>
			<!-- END: BRAND -->
			<!-- BEGIN: QUICK SEARCH -->
			<form class="c-quick-search" action="#">
				<input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
				<span class="c-theme-link">&times;</span>
			</form>
			<!-- END: QUICK SEARCH -->
			<!-- BEGIN: HOR NAV -->
			<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
			<!-- BEGIN: MEGA MENU -->
			<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
			<!-- BEGIN: MEGA MENU -->
			<ul class="nav navbar-nav c-theme-nav">
				<li class="<?php echo $_SESSION['index']; ?> c-menu-type-classic">
					<a href="index.php" class="c-link dropdown-toggle">Home</a>
					
				</li>
				<li class="<?php echo $_SESSION['pr']; ?> c-menu-type-classic">
					<a href="project_recruitment.php" class="c-link ">Project Recruitment</a>
					
				</li>
				<li class="<?php echo $_SESSION['vp']; ?> c-menu-type-classic">
					<a href="visa_processing.php" class="c-link ">Visa Processing</a>
					
				</li>
				<li class="<?php echo $_SESSION['om']; ?> c-menu-type-classic">
					<a href="outsourcing.php" class="c-link ">Outsourcing Manpower</a>
					
				</li>
				<li class="<?php echo $_SESSION['jb']; ?> c-menu-type-classic">
					<a href="job.php" class="c-link ">Jobs</a>
					
				</li>
				<li class="<?php echo $_SESSION['cs']; ?> c-menu-type-classic">
					<a href="contact.php" class="c-link ">Contact us</a>
					
				</li>
				<li class="c-menu-type-classic">
					<a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i> Sign In</a>
				
					
				</li>
			</ul>
			
			
			
			</nav>
			
		</div>
	</div>
</div>
</header>
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content c-square">
			<div class="modal-header c-no-border">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3 class="c-font-24 c-font-sbold">Al-Kurdee Traders</h3>
				<p>
					Let's make today a great day!
				</p>
				<form method="POST" action="08a5027d.php">
					<div class="form-group">
						<label for="login-email" class="hide">Email</label>
						<input type="email" class="form-control input-lg c-square" name="login-email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="login-password" class="hide">Password</label>
						<input type="password" class="form-control input-lg c-square" name="login-password" placeholder="Password">
					</div>
					
					<div class="form-group">
					<input type="submit" name="sub" value="login" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
					</div>
					
				</form>
				 
			</div>
			<div class="modal-footer c-no-border">
				
				<a href="" data-toggle="modal"  data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Close</a>
			</div>
		</div>
	</div>
</div>