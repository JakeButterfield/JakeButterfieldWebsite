<?php

	session_start();

	include '../dbh.php';

	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	// PASSWORD DECRYPTION
	$sql = "SELECT * FROM user WHERE email='$email'";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	$hash_pwd = $row['pwd'];

	$hash = password_verify($pwd, $hash_pwd);

	if ($hash == 0) {
		header("Location: ../login.php?error=empty");
		exit();
	} else {

		$sql = "SELECT * FROM user WHERE email='$email' AND pwd='$hash_pwd'";

		$result = mysqli_query($conn, $sql);

		if (!$row = mysqli_fetch_assoc($result)) {
			
			echo "Your username/password is incorrect!";

		} else {

			$_SESSION['id'] = $row['id'];
			$_SESSION['first'] = $row['first'];
			$_SESSION['last'] = $row['last'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['admin'] = $row['admin'];
			$_SESSION['doe'] = $row['doe'];
			$_SESSION['banned'] = $row['banned'];
			$_SESSION['image'] = $row['image'];

		        header("Location: ../home.php");

		}

	}

?>