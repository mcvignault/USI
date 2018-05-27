<?php

session_start();	

if(isset($_POST['submit'])) {

	include_once 'MLBDBConn.php';

	$dkid = mysqli_real_escape_string($conn,$_POST['dkid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	//Error handlers
	//Check if inputs are empty
	if(empty($dkid) || empty($pwd)) {
		# code...
	} else{
		$sql = "SELECT * FROM users WHERE user_dkid='$dkid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: ../index.php?username=error");
			exit();
		} else{
			if($row = mysqli_fetch_assoc($result)) {
				//De-hasing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if($hashedPwdCheck == false){
					header("Location: ../index.php?password=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_dkid'] = $row['user_dkid'];
					header("Location: ../index.php?login=success");
					exit();

				}
			}
		}
	}
} else{
	header("Location: ../index.php?login=error");
	exit();
}

