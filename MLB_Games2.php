<?php
	include_once 'MLB_includes/MLBDBConn.php';
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
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">ULTIMATE SPORTS INVESTOR</a></h1>
						<span>Presented by Trend-Eng Sports</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.html">Homepage</a></li>
							<li><a href="USI_Rules.html">Rules</a></li>
							<li><a href="MLB_Registration.html">Registration</a></li>
							<li><a href="MLB_Select2.html">Competition</a></li>
							<li><a href="twocolumn1.html">Standings</a></li>
							<li><a href="twocolumn2.html">Daily Insights</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
									<h2>Daily Fantasy Sports</h2>
									<span class="byline">test test test</span>
								</header>
								<p>Use the links below to access tonight's DraftKings contests:</p>
								<ul class="default">
									<li><a href="https://www.draftkings.com/">Main Contest</a></li>
									<li><a href="#">Eliminator Contest</a></li>
									
								</ul>
							</section>
						</div>
					<!-- Sidebar -->
				
					<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header>
									<h2>Sports Betting</h2>
									<span class="byline">Please select the date of the games you would like to view:</span>
								</header>
								
<form action="MLB_Games2.php" method="POST">
<input type="date" name="gm_date">
<button name="submit" type="submit">Submit</button>

</form>


<table>
			<thead>
			<tbody>
			<tr>
				<th colspan="3" scope="col"></th>
				<th colspan="3" scope="col">MONEYLINE</th>
				<th colspan="3" scope="col">RUNLINE</th>
				<th colspan="5" scope="col">TOTALS</th>
			</tr>
			<tr>
				<th scope="col">Game No.</th>
				<th></th>
				<th scope="col">Team</th>
				<th scope="col">Bet</th>
				<th scope="col">Moneyline</th>
				<th scope="col">Wager</th>
				<th scope="col">Bet</th>
				<th scope="col">Runline</th>
				<th scope="col">Wager</th>
				<th scope="col">Total</th>
				<th scope="col">Bet</th>
				<th scope="col">Outcome</th>
				<th scope="col">Odds</th>
				<th scope="col">Wager</th>
			</tr>
			</thead>
<?php
	$gmdate = $_POST['gm_date'];
	$sql = "SELECT home_team, home_ml, home_rl, away_team, away_ml, away_rl, total, over_odds, under_odds FROM games_2018 WHERE game_date='$gmdate';";
	$result = mysqli_query($conn, $sql);
	$datas = array();
	
	if(mysqli_num_rows($result) > 0){
		$GmCount = 1;
		$BetNo = 1;
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td rowspan=2>".$GmCount."</td><td>"."Away"."</td><td>".$row["away_team"]."</td><td>"."A"."</td><td>".$row["away_ml"]."</td><td>"."<input placeholder='$$' type='text' size='5'>".
			"</td><td>"."A+"."</td><td>".$row["away_rl"]."</td><td>"."<input placeholder='$$' type='text' size='5'>".
			"</td><td rowspan=2>"."".$row["total"]."</td><td>"."O"."</td><td>"."Over"."</td><td>".$row["over_odds"]."</td><td>"."<input placeholder='$$' type='text' size='5'>"."</td></tr>".
			"<tr><td>"."Home"."</td><td>".$row["home_team"]."</td><td>"."H"."</td><td>".$row["home_ml"]."</td><td>"."<input placeholder='$$' type='text' size='5'>"."</td><td>"."H+"."</td><td>".$row["home_rl"]."</td><td>".
			"<input placeholder='$$' type='text' size='5'>".
			"</td><td>"."U"."</td><td>"."Under"."</td><td>".$row["under_odds"]."</td><td>"."<input placeholder='$$' type='text' size='5'>"."</td></tr>";
			$GmCount = $GmCount+1;
		}
		echo "</table>";
	}
	else{
		echo "0 result";
	}
	//print_r($datas);
	
?>
</table>
</section>
						</div>
					<!-- /Content -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
							<ul class="style1">
								<li><img src="images/pics05.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics06.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics07.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
							<ul class="style1">
								<li class="first"><img src="images/pics08.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics09.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics10.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
							</ul>
						</section>				
					</div>
					<div class="6u">
						<section>
							<header>
								<h2>Aenean elementum</h2>
							</header>
							<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
							<ul class="default">
								<li><a href="#">Pellentesque quis lectus gravida blandit.</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing elit.</a></li>
								<li><a href="#">Phasellus nec nibh pellentesque congue.</a></li>
								<li><a href="#">Cras aliquam risus pellentesque pharetra.</a></li>
								<li><a href="#">Duis non metus commodo euismod lobortis.</a></li>
								<li><a href="#">Lorem ipsum dolor adipiscing elit.</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	</body>
</html>