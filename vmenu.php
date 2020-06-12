<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Resort Booking</title>
<!-- custom-theme -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- tabs -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //tabs -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="header-bottom">
			<div class="header">
				<div class="container">
					<div class="w3_agile_logo">
						<h1><a href="index.php"><span>Resort</span>Booking</a></h1>
					</div>
					<div class="header-nav">
						<nav class="navbar navbar-default">
							<div class="navbar-header navbar-left">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
								<nav class="link-effect-12">
									<ul class="nav navbar-nav w3_agile_nav">
										<li><a href="index.php"><span>Home</span></a></li>
										<li><a href="vhotel.php"><span>Hotel</span></a></li>
										<li><a href="about.php"><span>About</span></a></li>
										<li><a href="gallery.php"><span>Gallery</span></a></li>
										<?php
										if(!isset($_SESSION['reg_id']))
										{
										?>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Register</span> <b class="caret"></b></a>
											<ul class="dropdown-menu agile_short_dropdown">
												<li><a href="userregister.php">User Register</a></li>
												<li><a href="hotelregister.php">Hotel Register</a></li>
											</ul>
										</li>
									<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Login</span> <b class="caret"></b></a>
											<ul class="dropdown-menu agile_short_dropdown">
												<li><a href="vlogin.php">User Login</a></li>
												<li><a href="login.php">Hotel Login</a></li>
											</ul>
										</li>
										<?php
										}
										else

										{
										?>
										<li><a href="logout.php"><span>Logout</span></a></li>
									
										<?php
										}
										?>
										<li><a href="vfeedback.php"><span>Feedback</span></a></li>

									</ul>	
								</nav>
							</div>
						</nav>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
<!-- header -->

<!-- w3-banner -->

			<div class="w3-banner">
				<div id="typer"></div>
				<div class="top-banner-right">
					<ul>
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>	
			</div>
<!-- //w3-banner -->

		</div>
	</div>