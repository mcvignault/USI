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
									<h2>Standings - Eliminator Contest</h2>
									<span class="byline">
										<p>
											<a href="Standings_Main.php">Main Contest</a>
												|	
											<a href="Standings_Eliminator.php">Eliminator Contest</a>
											</p>
											<hr />
									</span>
								</header>

								<table class="eliminator">
									<thead>
										<tr class="standings">
											<th>SURVIVORS</th>
										</tr>
									</thead>
									<tbody>
					<?php
                    if (($csvfile = fopen("MLB_includes/eliminator_safe.csv", "r")) !== FALSE) {
                        while (($csvdata = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
                            $error='';
                            $colcount = count($csvdata);
                            echo '<tr class="eliminator">';
                            echo '<td class="eliminator">'.$csvdata[1].'</td>';
                            echo '</tr>';
                        }
                        fclose($csvfile);
                    }
                            ?>
								</tbody>
								</table><hr /><br />

								<table class="eliminator">
									<thead>
										<tr class="standings">
											<th colspan=2>ELIMINATED</th>
										</tr>
										<tr>
											<th class="standings">Username</th>
											<th class="standings">Week Eliminated</th>
										</tr>
									</thead>
									<tbody>
					<?php
                    if (($csvfile = fopen("MLB_includes/eliminator_out.csv", "r")) !== FALSE) {
                        while (($csvdata = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
                            $error='';
                            $colcount = count($csvdata);
                            echo '<tr class="eliminator">';
                            echo '<td class="eliminator">'.$csvdata[0].'</td>'.
                            '<td class="eliminator">'.$csvdata[1].'</td>';
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