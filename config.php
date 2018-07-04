<?php

	define("TEMPLATE_DIR", "../template/");
	define("LAYOUT_DIR", TEMPLATE_DIR . "layout/");

	$host = "localhost";
	$user = "root";
	$pass = "R4P1T0";
	$db = "enuygun";

	$connection = mysqli_connect($host, $user, $pass) or die("Couldn't connect to the server. " . mysqli_error());
	mysqli_query("SET NAMES UTF8");
	mysqli_select_db($connection, $db) or die("Cannot select database! " . mysqli_error());

	$query = "select * from posts";
	$result = mysqli_query($connection, $query);
	$data = [];

	if(mysqli_num_rows($result) > 0) {
		while($data[] = mysqli_fetch_assoc($result));
	} else {
		echo "No results";
	}

	print_r($data);
	
?>