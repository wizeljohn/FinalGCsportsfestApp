<?php
include "config.php";

$username=$_POST['UserCom'];
$post=$_POST['txtPost'];

	$sql = "INSERT INTO tbl_post(post_id, post_user,post_content, post_date) 
			VALUES (NULL,'".$username."','".$post."',CURRENT_TIMESTAMP)";

			
	$result = mysqli_query($con, $sql);
		
		if($result){
			echo "i will graduate";
		}
		else{
			echo "5 years in GC";
		}

?>