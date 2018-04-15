<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
		 <link rel="shortcut icon" type="image/png" href="../Student/submit att/Attend/images/login.png"/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Student Attende</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="this form to attend"/>
	<meta name="keywords" content="Student attend form" />
	<meta name="author" content="FRank.org" />

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

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> 
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../Student/submit att/Attend/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../Student/submit att/Attend/css/style.css">

	<!-- Modernizr JS -->
	<script src="../Student/submit att/Attend/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../Student/submit att/Attend/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<?php
		// Start the session date_default_timezone_set("Egypt/Cairo");
         session_start();
		?>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
		


	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="https://www.facebook.com/offliny/">FRank<em>.</em></a></div>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					
					<div class="row row-mt-15em" style="margin-top: 0em;">
						<div class="col-md-7 mt-text animate-box" style="margin-top: 10em; margin-right: 5em;" data-animate-effect="fadeInUp">
							<h1>Check the data first and press Generate location and press to record attendance.</h1>	
						</div>
						
						<div class="col-md-4 col-md-push-1animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Send your attende</h3>
											
											<form action="frankRecAtt.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Student Name:</label>
														<input type="text" readonly="readonly" value="<?php echo $_SESSION["nameSet"]; ?>" class="form-control" name="b1">
													</div>
												
												
												
														<label for="date-start">Student ID:</label>
														<input type="text" readonly="readonly"  value="<?php echo $_SESSION["IdSet"]; ?>" class="form-control" name="b2">
														<label for="date-start"> Current Date and time:</label>
														<input type="text" readonly="readonly"  class="form-control" value="<?php echo "The time is " . date("h:i:sa"); ?>" name="s18">
												        <label for="date-start"> Click to generate latitude:</label>
														<input type="text" readonly="readonly"  class="form-control" name="b3">
														<label for="date-start"> Click to generate longitude:</label>
														<input type="text" readonly="readonly"  class="form-control" name="b4">
														<br>
                                                        <input type="button" onclick="getLocation();" class="form-control" value="Generate Location">
                                                         <br>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Record Attende">
													</div>
												</div>
											</form>	
										</div>
												

										
									</div>
								</div>
							</div>
						</div>
							
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	


	<!-- jQuery -->
	<script src="../Student/submit att/Attend/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../Student/submit att/Attend/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../Student/submit att/Attend/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../Student/submit att/Attend/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../Student/submit att/Attend/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../Student/submit att/Attend/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="../Student/submit att/Attend/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="../Student/submit att/Attend/js/jquery.magnific-popup.min.js"></script>
	<script src="../Student/submit att/Attend/js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="../Student/submit att/Attend/js/bootstrap-datepicker.min.js"></script>
	


	<!-- Main -->
	<script src="../Student/submit att/Attend/js/main.js"></script>

<script>
	var x;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
   document.getElementsByName("b3")[0].value = position.coords.latitude;
   document.getElementsByName("b4")[0].value = position.coords.longitude;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation.";
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable.";
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out.";
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred.";
            break;
    }
}
</script>

	</body>
</html>

