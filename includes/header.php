<?php
$page = "";
$page = (isset($_GET['sd']))?$_GET['sd'] : 'home';
if(!in_array($page, array('home', 'about','contact','quote','service','review','gallery' )))
{
	include("404.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Breathe Easy HVAC</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
	<link rel="icon" href="images/logo.jpg" type="image/x-icon" />

	<!--adding animation-->
	<link rel="stylesheet"  href="css/animate/animate.css">

	<!--magnific popup css-->
	<link rel="stylesheet" href="css/magnific/magnific-popup.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--adding a animate js-->
	<script src="js/wow/wow.min.js"></script>

	<!--adding the jquery file-->
	<script src="js/jquery.js"></script>

	<!--adding a magnific popup-->
	<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/banner.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Buzz">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeAnlh-dzmzzFDJvPfxLZAERfuzExdjPk&libraries=places"></script>
</head>

<body>
	<div class="container-fluid hidden-xs" style="background: #02AEF0;padding: 5px;">
		<div class="container">
			<div class="col-md-4">
				<p style="color: #000 !important;">
					<span><i class="fa fa-phone"></i></span> (872) 484-2033
				</p>
			</div>
			<div class="col-md-4">
				<p style="color: #000 !important;">
					<span><i class="fa fa-envelope"></i></span> Breathehvac@gmail.com
				</p>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<p style="color: #000 !important;">
					<span><i class="fa fa-facebook"></i></span> &nbsp &nbsp
					<span><i class="fa fa-google-plus"></i></span>&nbsp &nbsp
					<span><i class="fa fa-yelp"></i></span>&nbsp &nbsp
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="border-top: 2px solid #ddd;border-bottom: 2px solid #ddd;">
		<div class="container">
			<div class="col-md-3">
				<center><img src="images/logo.jpg" class="img-responsive" style="height: 140px;"></center>
			</div>
			<div class="col-md-9">
				<br class="hidden-xs"><br class="hidden-xs">
				<nav class="navbar  navbar-static-top" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
							<span class="sr-only" >Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="tel:(872) 484-2033" style="text-decoration: none;"><button class="tap visible-xs" style="margin-top: 7px;">Tap To Call</button></a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-collapse-1">
						<center>
							<ul class="nav navbar-nav ">
								<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="home">Home</a></li>
								<li class="<?php if($page=='about'){echo 'active';} ?>"><a href="about">About Us</a></li>
								<li class="<?php if($page=='service'){echo 'active';} ?>"><a href="service">Services</a></li>
								<li class="<?php if($page=='review'){echo 'active';} ?>"><a href="review">Reviews</a></li>
								<li class="<?php if($page=='gallery'){echo 'active';} ?>"><a href="gallery">Work Gallery</a></li>
								<li class="<?php if($page=='quote'){echo 'active';} ?>"><a href="quote">Get Quote</a></li>
								<li class="<?php if($page=='contact'){echo 'active';} ?>"><a href="contact">Contact</a></li>
							</ul>
						</center>
					</div>
				</nav>
			</div>
		</div>
	</div>