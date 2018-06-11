<?php
session_start();
?>

<!DOCTYPE HTML>
<!--
	Monochromed by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Monochromed by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>
		
	<!-- Header -->
	<header>	
		
			
<div class="container">	
		<div class="main-wrapper">
					<div class="nav-login">
							
							
						<?php
							if(isset($_SESSION['u_id'])){
								echo '<div class="container"><form action="MLB_includes/MLB_Logout.php" method="POST">
									<button type="submit" name="submit">Logout</button></form></div>';
						} else {						
							
						echo '<div class="container"><form action="MLB_includes/MLB_Login.php" method="POST">
							<input placeholder="DraftKings Username" name="dkid" type="text" tabindex="1" required>
							<input placeholder="Password" name="pwd" type="password" tabindex="1" required>
							<button type="submit" name="submit">Login</button>
							</form></div>';
							}
						?>
					
				
					</div>
		</div>
	
</header>		
	<div id="header">	
			
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">ULTIMATE SPORTS INVESTOR</a></h1>
						<span>Presented by Trend-Eng Sports</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<?php include('nav.php'); ?>

					</nav>


			</div>
		</div>

	<!-- Header -->

