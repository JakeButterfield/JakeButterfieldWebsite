<?php

	$conn = mysqli_connect("localhost", "DATABASE", "DATABASE", "DATABASE");

	if (!$conn) {
		die("Connection Failed: " . mysqli_connect_error());
	}

?>