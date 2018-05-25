<?php
	include_once 'MLBDBConn.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$dkid = mysqli_real_escape_string($conn, $_POST['dkid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	$sql = "INSERT INTO users (user_first, user_last, user_email, user_dkid, user_pwd)
			VALUES ($first,$last,$email,$dkid,$pwd);";
	
	mysqli_query($conn,$sql);
	
	
	
	header("Location: ../Main_Payment2.html");