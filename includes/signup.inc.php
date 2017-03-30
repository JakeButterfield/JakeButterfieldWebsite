<?php

	session_start();

	include '../dbh.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$admin = 0;
	$doe = date('d-m-Y');
	$banned = 0;
	$image = 'images/default.png';

	if (empty($first)) {
		header("Location: ../signup.php?error=empty");
		exit();
	} 

	if (empty($last)) {
		header("Location: ../signup.php?error=empty");
		exit();
	}

	if (empty($email)) {
		header("Location: ../signup.php?error=empty");
		exit();
	}

	if (empty($pwd)) {
		header("Location: ../signup.php?error=empty");
		exit();
	} else {

		$sql = "SELECT email FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);

		if ($uidcheck > 0) {
			header("Location: ../signup.php?error=username");
			exit();
		} else {

			$encryped_password = password_hash($pwd, PASSWORD_DEFAULT);

			$sql = "INSERT INTO user (first, last, email, pwd, admin, doe, banned, image) VALUES ('$first', '$last', '$email', '$encryped_password', '$admin', '$doe', '$banned', '$image')";

			$result = mysqli_query($conn, $sql);

			header("Location: ../login.php");

		}
	}

?>