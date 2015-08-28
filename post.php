<?php
include "config.php";
	$sql = "SELECT * FROM tbl_post";
	$result = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<b><p id='postUser' name='postUser' >".$row["post_user"]." </p></b>";
			echo "<p id='postContent' name='postContent' >".$row["post_content"]."</p>";
			echo "<hr>";
		}
	}
	else{
		echo ("No records found");
	}


?>


		
