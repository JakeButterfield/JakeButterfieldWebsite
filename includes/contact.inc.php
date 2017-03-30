<?php

	session_start();

	include '../dbh.php';

	$first = $_SESSION['first'];
	$last = $_SESSION['last'];
	$email = $_SESSION['email'];
	$message = $_POST['cmessage'];
	$reply = 'None Yet!';

	if (empty($message)) {
		header("Location: ../contact.php?error=empty");
		exit();

	} else {

			$sql = "INSERT INTO contact (cname, clname, cemail, cmessage, creply) VALUES ('$first', '$last', '$email', '$message', '$reply')";

			$result = mysqli_query($conn, $sql);

			header("Location: ../contact.php?sent");

	}

?>