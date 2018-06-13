<?php include('MLB_includes/USI_header.php'); ?>
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
						<div id="content" class="12u skel-cell-important">
							<section>
								<header>
									<h2>Login</h2>
									
								</header>
								
		
		  <form action="MLB_includes/MLB_Login.php" method="POST">
			<fieldset>
			  <input placeholder="DraftKings Username" name="dkid" type="text" tabindex="1" required>
			</fieldset>
			<fieldset>
			  <input placeholder="Password" name="pwd" type="password" tabindex="1" required>
			</fieldset>
			<fieldset>
			  <button name="submit" type="submit">Login</button>
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