<?php
	include "config.php";

	$username = $_GET['txtUsername'];
	$password = $_GET['txtPassword'];

	if($username && $password){
		// mysqli_select_db($con, "db_sportfest");
		$sql = "SELECT * FROM tbl_user WHERE user_Email = '".$username."' AND user_Password = '".$password."' ";
		$result = mysqli_query($con, $sql);

			if(mysqli_num_rows($result)){
				echo "Welcome";
			}
			else{
				echo "Wrong Username or Password";
			}
	}

?>