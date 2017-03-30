<?php

	session_start();

	include '../dbh.php';

	$userid = $_SESSION['id'];
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];

	if (empty($oldpass)) {
		header("Location: ../profile.php?error=empty");
		exit();
	} 

	if (empty($newpass)) {
		header("Location: ../profile.php?error=empty");
		exit();

	} else {

		$row = mysqli_fetch_assoc($userid);

		$hash_pwd = $row['pwd'];

		$oldpassword = password_hash($oldpass, PASSWORD_DEFAULT);

		if ($oldpassword != $hash_pwd) {


			$newpassword = password_hash($newpass, PASSWORD_DEFAULT);

			$sql = "UPDATE user set pwd='$newpassword' WHERE id = $userid";

			$result = mysqli_query($conn, $sql);

			header("Location: ../profile.php?pcomplete");
		} else {
			
			header("Location: ../profile.php?error=wrongpass");
			exit();

		}
	}

?>