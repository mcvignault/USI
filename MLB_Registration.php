<?php include('MLB_includes/USI_header.php'); ?>
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
						<div id="content" class="12u skel-cell-important">
							<section>
								<header>
									<h2>REGISTRATION</h2>
									<span class="byline">Registration is currently open for the MLB Ultimate Sports Investor Competition and the MLB Daily Fantasy Eliminator.</span>
								</header>
								<p>Once you fill in the following form, an email will be sent to the provided address containing links to entry fee payment options.  The fees for the two competitions are:
									<li>Main Competition - $20</li>
									<li>Eliminator - $10</li></p>
		
		  <form action="MLB_includes/MLB_DBReg.php" method="POST">
			<fieldset>
			  <input placeholder="First Name" name="first" type="text" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>
			  <input placeholder="Last Name" name="last" type="text" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>
			  <input placeholder="Email Address" name="email" type="email" tabindex="1" required>
			</fieldset>
			<fieldset>
			  <input placeholder="DraftKings Username" name="dkid" type="text" tabindex="1" required>
			</fieldset>
			<fieldset>
			  <input placeholder="Password" name="pwd" type="password" tabindex="1" required>
			</fieldset>
			<fieldset>
			  <button name="submit" type="submit">Register</button>
			</fieldset>
		  </form>
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
