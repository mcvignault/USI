<?php
	if (isset($_POST['submit'])) {
		# code...
	} else{
		header("Location: ../MLB_registration.php");
		exit();
	}


	include_once 'MLBDBConn.php';
	
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
	
	
	
	header("Location: ../Main_Payment.php");