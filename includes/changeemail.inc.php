<?php

	session_start();

	include '../dbh.php';

	$userid = $_SESSION['id'];
	$oldmail = $_POST['oldemail'];
	$newmail = $_POST['newemail'];

	if (empty($oldmail)) {
		header("Location: ../profile.php?error=empty");
		exit();
	} 

	if (empty($newmail)) {
		header("Location: ../profile.php?error=empty");
		exit();

	} else {

        $sql = "SELECT email FROM user WHERE email='$newmail'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);

		if ($uidcheck > 0) {
			header("Location: ../profile.php?error=email");
			exit();
		} else {

			$row = mysqli_fetch_assoc($userid);
			$oldsetemail = $_SESSION['email'];

			if ($oldmail == $oldsetemail) {

				$sql = "UPDATE user set email='$newmail' WHERE id='$userid'";

				$result = mysqli_query($conn, $sql);

				$_SESSION['email'] = $newmail;

				header("Location: ../profile.php?ecomplete");

			} else {
				
				header("Location: ../profile.php?error=wrongmail");
				exit();
				
			}

		}

	}

?>