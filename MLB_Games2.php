<?php
	include_once 'MLB_includes/MLBDBConn.php';
	include('MLB_includes/USI_header.php');
?>
		
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
									<h2>Daily Fantasy Sports</h2>
									
								</header>
								
								<p>Use the links below to access tonight's DraftKings contests:</p>
								<ul class="default">
									<li><a href="https://www.draftkings.com/" target="_blank">Main Contest</a></li>
									<li><a href="https://www.draftkings.com/" target="_blank">Eliminator Contest</a></li>
									<li></li>
								</ul>

								<p>Rosters must be submitted by 7:00 PM.</p><br />

								<header>
									<h2>Insights</h2>
									
								</header>
								
								<p>Use the following to help you make selections for tonight's games:</p>
								<ul class="default">
									<li><a href="https://experts.covers.com/MLB/FreePicks" target="_blank">Sports Betting Free Picks</a></li>
									<li><a href="https://www.draftkings.com/" target="_blank">DFS Expert Analysis</a></li>
									<li></li>
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

<br />



<table class="title">
			<thead>
			<tr>
				<th colspan="3" scope="col" class="comp"></th>
				<th colspan="2" scope="col" class="comp">MONEYLINE</th>
				<th colspan="2" scope="col" class="comp">RUNLINE</th>
				<th colspan="4" scope="col" class="comp">TOTALS</th>
			</tr>
			<tr>
				<th scope="col" class="comp">Game No.</th>
				<th scope="col" class="comp"></th>
				<th scope="col" class="comp">Team</th>
				<th scope="col" class="comp">Moneyline</th>
				<th scope="col" class="comp">Wager</th>
				<th scope="col" class="comp">Runline</th>
				<th scope="col" class="comp">Wager</th>
				<th scope="col" class="comp">Total</th>
				<th scope="col" class="comp">Outcome</th>
				<th scope="col" class="comp">Odds</th>
				<th scope="col" class="comp">Wager</th>
			</tr>
			</thead>
			<tbody>
		
	
<?php
if(isset($_POST['submit'])) {

	$gmdate = $_POST['gm_date'];
	$sql = "SELECT home_team, home_ml, home_rl, away_team, away_ml, away_rl, total, over_odds, under_odds FROM games_2018 WHERE game_date='$gmdate';";
	$result = mysqli_query($conn, $sql);
	$datas = array();
	
	if(mysqli_num_rows($result) > 0){
		$GmCount = 1;
		$BetNo = 1;
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td rowspan=2 class='comp'>".$GmCount."</td><td class='top-row'>"."Away"."</td><td class='top-row'>".$row["away_team"]."</td><td class='top-row'><span class='ml-odds'>".$row["away_ml"]."</span></td><td class='top-row'>"."<input placeholder='$' type='text' size='2'>".
			"</td><td class='top-row'><span class='rl-odds'>".$row["away_rl"]."</span></td><td class='top-row'>"."<input placeholder='$' type='text' size='2'>".
			"</td><td rowspan=2 class='comp'>"."".$row["total"]."</td><td class='top-row'>"."Over"."</td><td class='top-row'><span class='ou-odds'>".$row["over_odds"]."</span></td><td class='top-row'>"."<input placeholder='$' type='text' size='2'>"."</td></tr>".
			"<tr><td class='comp'>"."Home"."</td><td class='comp'>".$row["home_team"]."</td><td class='comp'><span class='ml-odds'>".$row["home_ml"]."</span></td><td class='comp'>"."<input placeholder='$' type='text' size='2'>"."</td><td class='comp'><span class='rl-odds'>".$row["home_rl"]."</span></td><td class='comp'>"."<input placeholder='$' type='text' size='2'>"."</td><td class='comp'>"."Under"."</td><td class='comp'><span class='ou-odds'>".$row["under_odds"]."</span></td><td class='comp'>"."<input placeholder='$' type='text' size='2'>"."</td></tr>";
			$GmCount = $GmCount+1;
		}
		
	}
	else{
		echo "0 result";
	}
	//print_r($datas);
}	

?>
</tbody>
</table>

<?php
	if(isset($_SESSION['u_id'])){
		echo '<br /><form action="MLB_includes/MLB_Logout.php" method="POST">
			<button type="submit" name="submit">Submit Picks</button></form>';
} 
?>
</section>
						</div>
					<!-- /Content -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
		<?php include('MLB_includes/USI_footer.php');
	?>
