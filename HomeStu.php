<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		 <link rel="shortcut icon" type="image/png" href="../Student/Student Run/Frank/images/login.png"/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome FRank Solution</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Student login success" />
	<meta name="keywords" content="Student login success" />
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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="../Student/Student Run/Frank/favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../Student/Student Run/Frank/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../Student/Student Run/Frank/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../Student/Student Run/Frank/css/bootstrap.css">
	<!-- animatedresponsiveImagegrid  -->
	<link rel="stylesheet" href="../Student/Student Run/Frank/css/animatedresponsiveImagegrid.css">
	<!-- Magnifoc Popup  -->
	<link rel="stylesheet" href="../Student/Student Run/Frank/css/magnific-popup.css">

	<link rel="stylesheet" href="../Student/Student Run/Frank/css/style.css">


	<!-- Modernizr JS -->
	<script src="../Student/Student Run/Frank/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../Student/Student Run/Frank/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
		<?php


// Start the session
session_start();
?>

<?php
// Set session variables
$_SESSION["nameSet"] = $name;
$_SESSION["IdSet"] = $pass;

?>
		

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li class="active"><a href="HomeStu.php">Scan code</a></li>
					<li><a href="contactStu.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<!-- http://localhost:8080/percenrage/project/Stu-Rec.php -->
					<!-- https://www.the-qrcode-generator.com/scan-->
					<h1 class="text-center"><a class="fh5co-logo" href="https://www.the-qrcode-generator.com/scan" target='_blank'><i class="icon-camera2"></i></a></h1>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						  <form method="post" action="REC-HEND.php" style="display: none; visibility: hidden;">
				
				          Username:
				            <input type= "text" value="<?php echo $name;?>" name="n1">
                          Password:
                            <input type="text" value="<?php echo $pass;?>" name="n2">
					

						</form>
						<h2 class="intro-heading"> <?php echo $name;?> Focus camera to QR code to scan</h2>
						<p><span>Created by FRank software developer group <a href="https://www.facebook.com/offliny/">FRank Page</a></span></p>
					</div>
				</div>
			</div>
		</div>
		
		
		<footer>
			<div id="footer">
				
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icon">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="https://www.facebook.com/الصفحة-الرسمية-لإدارة-كلية-العلوم-جامعة-الإسكندرية-208344759184679/?ref=br_rs"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2018 FRank group <a href="https://www.facebook.com/offliny/">FRank</a>. All Rights Reserved.<br>by <a href="https://www.facebook.com/offliny/" target="_blank">FRank Developer Group</a> /  Visit Our Page: <a href="https://unsplash.com/" target="_blank">FRank Soluation</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="../Student/Student Run/Frank/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../Student/Student Run/Frank/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../Student/Student Run/Frank/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../Student/Student Run/Frank/js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="../Student/Student Run/Frank/js/jquery.countTo.js"></script>
	<!-- gridrotator -->
	<script type="text/javascript" src="../Student/Student Run/Frank/js/jquery.gridrotator.js"></script>
	<!-- Magnific Popup -->
	<script type="text/javascript" src="../Student/Student Run/Frank/js/jquery.magnific-popup.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="../Student/Student Run/Frank/js/main.js"></script>

	<script type="text/javascript">	
		$(function() {
		
			$( '#ri-grid' ).gridrotator( {
				rows : 3,
				// number of columns 
				columns : 6,
				w1024 : { rows : 3, columns : 5 },
				w768 : {rows : 3,columns : 4 },
				w480 : {rows : 3,columns : 3 },
				w320 : {rows : 2,columns : 2 },
				w240 : {rows : 1,columns : 1 },
				preventClick : false
			} );
		
		});
	</script>

	</body>
</html>

