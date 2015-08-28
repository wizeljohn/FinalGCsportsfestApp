<?php
include "config.php";

$username = $_POST['txtSignUser'];
$email = $_POST['txtSignEmail'];
$pass = $_POST['txtSignPass'];
$dept = $_POST['radDepartment'];


	$sql = "INSERT INTO tbl_user(user_Id, user_Email, user_Name, user_Password, user_Department)  
		VALUES (NULL,'".$email."', '".$username."', '".$pass."', '".$dept."')";

	$result = mysqli_query($con, $sql);
		if($result){
			echo "i will graduate";
		}
		else{
			echo "5 years in GC";
		}

?>