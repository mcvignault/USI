<?php include('MLB_includes/USI_header.php');
?>
		
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
						<div id="content" class="12u skel-cell-important">
							<section>
								<header>
									<h2>Standings - Main Contest</h2>
									<span class="byline">
										<p>
											<a href="Standings_Main.php">Main Contest</a>
												|	
											<a href="Standings_Eliminator.php">Eliminator Contest</a>
											</p>
											<hr />
									</span>
								</header>
								<table class="standings">
									<thead>
										<tr class="standings">
											<th class="standings">Rank</th>
											<th class="standings">Username</th>
											<th class="standings">DFS Points</th>
											<th class="standings">Sports Betting Points</th>
											<th class="standings">Overall Points</th>
											<th class="standings">Bankroll</th>
										</tr>
									</thead>
									<tbody>
					<?php
                    if (($csvfile = fopen("MLB_includes/standings.csv", "r")) !== FALSE) {
                        while (($csvdata = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
                            $error='';
                            $colcount = count($csvdata);
                            echo '<tr>';
                            echo '<td class="standings">'.$csvdata[0].'</td>'.
                            '<td class="standings">'.$csvdata[1].'</td>'.
                            '<td class="standings">'.$csvdata[2].'</td>'.
                            '<td class="standings">'.$csvdata[3].'</td>'.
                            '<td class="standings">'.$csvdata[4].'</td>'.
                            '<td class="standings">'.$csvdata[5].'</td>';
                            echo '</tr>';
                        }
                        fclose($csvfile);
                    }
                            ?>
								</tbody>
								</table>
								
								
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