<?php
	session_start();

	include '../dbh.php';

	$reply = $_POST['creply'];

	if (empty($reply)) {
		header("Location: ../admin.php?error=rempty");
		exit();
	} else {

                $sql = "UPDATE `contact` SET `creply` = '$reply' WHERE `contact`.`cid` = '$msg'";
		$result = mysqli_query($conn, $sql);

		header("Location: ../admin.php?rcomplete");

	}
?>