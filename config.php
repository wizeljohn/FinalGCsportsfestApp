<?php
	header('Access-Control-Allow-Origin :*');
	$local = "localhost";
	$user = "root";
	$pass = "";

	$con = mysqli_connect($local, $user, $pass);
	mysqli_select_db($con, "db_sportfest");

?>