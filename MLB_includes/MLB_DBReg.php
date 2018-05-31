<?php
	if (isset($_POST['submit'])) {
	
	include_once 'MLBDBConn.php';
	
	$name=$_POST['first'];
	$email=$_POST['email'];
	

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$dkid = mysqli_real_escape_string($conn, $_POST['dkid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	$sql = "SELECT * FROM users WHERE user_dkid='$dkid'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0) {
		header("Location: ../MLB_registration.php?username=taken");
		exit();
	}
	//hashing password
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	//Insert user into the database
	$sql = "INSERT INTO users (user_first, user_last, user_email, user_dkid, user_pwd)
			VALUES ('$first', '$last', '$email', '$dkid', '$hashedPwd');";
	
	mysqli_query($conn, $sql);
	
	//Send confirmation email to registrant
	$from='trendengsports@gmail.com'; // My email ID
	$subject='Ultimate Sports Investor - Complete Registration';
	$message="Hi ".$name."! Thank you for registering for the Ultimate Sports Investor!"."\n\n"."In order to complete your registration, please submit your payment via one of the following options:"."\n\n"."1. PayPal:"."\t"."Main Competition - https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=4VEJYZH9WPJHU&lc=CA&item_name=MLB%20%2d%20Main%20Competition&amount=20%2e00&currency_code=CAD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted"."\n"."\t\t"."Eliminator - https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=4VEJYZH9WPJHU&lc=CA&item_name=MLB%20%2d%20Eliminator&amount=10%2e00&currency_code=CAD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted"."\n\n"."2. Interac e-transfer to:  trendengsports@gmail.com"."\n\n"."Thank you,"."\n\n"."The Trend-Eng Sports Team";
	$headers="From: ".$from;

	if(mail($email, $subject, $message, $headers)){
		header("Location: ../Reg_Confirm.php?registration=success");
	}
	else{
		header("Location: ../MLB_registration.php?registration=error");
	}
		
	//header("Location: ../Main_Payment.php");
	} else{
		header("Location: ../MLB_registration.php");
		exit();
	}

?>
	
