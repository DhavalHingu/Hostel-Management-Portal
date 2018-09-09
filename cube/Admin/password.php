<?php error_reporting(0);
   include '..\connect.php';
   ?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Change Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
 <!--css for registration form-->
	<style type="text/css">
		@import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
	</style>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
			<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.html"><img src="images/logo.png" alt="Free HTML5 Website Template by GetTemplates.co"></a> Hostel Campus</div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li class="has-dropdown">
								<a href="services.html">Profile</a>
								<ul class="dropdown">
									<li><a href="password.php">Change Password</a></li>
									
								</ul>
							</li>
							<li class="has-dropdown">
								<a href="#">Student</a>
								<ul class="dropdown">
									<li><a href="#">View Registration</a></li>
									<li><a href="fees.php">Fees</a></li>
									<li><a href="#">View Fees</a></li>
									
								</ul>
							</li>
							

	<li class="has-dropdown">
								<a href="#">Rooms</a>
								<ul class="dropdown">
									<li><a href="block.php">Add Block</a></li>
									<li><a href="#">View Block</a></li>
									<li><a href="room.php">Add Room</a></li>
									<li><a href="#">View Room</a></li>
									<li><a href=alott.php>Allot Room</a></li>
								</ul>
							</li>
						<li class="has-dropdown">
                               <a href="#">Reports</a>
								<ul class="dropdown">
									<li><a href="#">Hostel Fees</a></li>
									<li><a href="#">Mess Bill</a></li>
									<li><a href="#">Total Billing</a></li>
								</ul>
							</li>
							<li><a href="portfolio.html">Logout</a></li>
							
						</ul>
					</div>
				</div>
				
			</div>
		</nav>


			<!---<header id="gtco-header" class="gtco-cover" role="banner">
			-->
<div style="background-color: #5bc0de;">
<div class="container" style="background-color: #5bc0de;}">
    <h1 class="well">Add Rooms</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action="reg_room.php">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Old Password</label>
								<input type="text"  class="form-control" name="op">
							</div>
							
					      
                          <div class="col-sm-6 form-group">
								<label>New Password</label>
								<input type="text"  class="form-control" name="np">
 							</div>
							
                          <div class="col-sm-12 form-group">
								<label>Confirm Password</label>
								<input type="text" class="form-control" name="cp">
 							</div>
						
                                 
                           <center>

					<input type="submit" class="btn btn-lg btn-info">					
					</center> 
					</div>
				</form> 
				
				</div>

	

</div>

			<!--	<div class="row">
					<div class="col-md-12 text-center">
					<p><a href="http://gettemplates.co" target="_blank" class="btn btn-special">Hostel Campus</a></p>
					</div>
				</div> -->
			</div>
		</div>
		<!-- END .gtco-products -->

		

		
			<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 gtco-cta text-center">
						<h3>We Love To Talk About Your Queries</h3>
						<p><a href="#" class="btn btn-white btn-outline">Contact Us</a></p>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-4 gtco-widget gtco-footer-paragraph">
						<h3>Hostel Campus</h3>
						<p>Make your hostel admission simple.</p>
					</div>
					<div class="col-md-4 gtco-footer-link">
						<div class="row">
							<div class="col-md-6">
								<ul class="gtco-list-link">
									<li><a href="#">Home</a></li>
									<li><a href="#">about</a></li>
									<li><a href="#">services</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<p>
									<a href="tel://1234567890">+91 9574926575</a> <br>
									<a href="#">info@hostelcampus.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 gtco-footer-subscribe">
						<form class="form-inline">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="" placeholder="Email">
						  <br>



						  </div>
						  <button type="submit" class="btn btn-primary">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="gtco-copyright">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p><small>&copy; 2018 Dhaval Tech. All Rights Reserved. </small></p>
						</div>
						<div class="col-md-6 text-right">
							<p><small>Managed by <a href="http://gettemplates.co/" target="_blank">Dhaval Hingu</a>  <a href="http://pixeden.com/" target="_blank"></a>  <a href="http://unsplash.com" target="_blank"></a></small> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

