<?php
	$host = 'localhost';
	$database = 'flowerstore';
	$user = 'root';
	$password = 'unit42';
	$conn = mysqli_connect($host, $user, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>