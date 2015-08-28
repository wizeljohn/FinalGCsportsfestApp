<?php
include "config.php"; 
?>

	<head>
		<style>
			table{
				width:100%;
				border-collapse: collapse;
				text-align:center; 
			}
			th, td {
			    padding: 5px;
			}
		</style>
	</head>
<?php
$sql = "SELECT * FROM tbl_schedule WHERE Sched_Day LIKE '%D1%' ";
$result = mysqli_query($con, $sql);
echo '<hr>';
echo '<h2 align="center"> Day One </h2>';
echo '<hr>';

echo "<table  width='100%'>";
echo "<tr>";
	echo "<th width='10%'>TIME</th>";
	echo "<th width='75%'>EVENT</th>";
	echo "<th width='15%'>VENUE</th>";
echo "</tr>";
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["Sched_Time"]."</td>";
		echo "<td>".$row["Sched_Event"]."</td>";
		echo "<td>".$row["Sched_Venue"]."</td>";
		echo "</tr>";
	}

echo "</table>";
}
else{
	echo "No Record Found";
}


//===========================================================Day 2 ========================================================================

$sqlt = "SELECT * FROM tbl_schedule WHERE Sched_Day LIKE '%D2%' ";
$resultt = mysqli_query($con, $sqlt);
echo '<hr>';
echo '<h2 align="center"> Day Two </h2>';
echo '<hr>';

echo "<table width='100%'>";
echo "<tr>";
	echo "<th width='10%'>TIME</th>";
	echo "<th width='75%'>EVENT</th>";
	echo "<th width='15%'>VENUE</th>";
echo "</tr>";
if(mysqli_num_rows($resultt) > 0){
	while($rowt = mysqli_fetch_assoc($resultt)){
		echo "<tr>";
		echo "<td>".$rowt["Sched_Time"]."</td>";
		echo "<td>".$rowt["Sched_Event"]."</td>";
		echo "<td>".$rowt["Sched_Venue"]."</td>";
		echo "</tr>";
	}

echo "</table>";
}
else{
	echo "No Record Found";
}
//==============================================================Day 3========================================================================

$sql3 = "SELECT * FROM tbl_schedule WHERE Sched_Day LIKE '%D3%' ";
$result3 = mysqli_query($con, $sql3);
echo '<hr>';
echo '<h2 align="center"> Day Three </h2>';
echo '<hr>';

echo "<table  width='100%'>";
echo "<tr>";
	echo "<th width='10%'>TIME</th>";
	echo "<th width='75%'>EVENT</th>";
	echo "<th width='15%'>VENUE</th>";
echo "</tr>";
if(mysqli_num_rows($result3) > 0){
	while($row3 = mysqli_fetch_assoc($result3)){
		echo "<tr>";
		echo "<td>".$row3["Sched_Time"]."</td>";
		echo "<td>".$row3["Sched_Event"]."</td>";
		echo "<td>".$row3["Sched_Venue"]."</td>";
		echo "</tr>";
	}

echo "</table>";
}
else{
	echo "No Record Found";
}


//===========================================================Day 4===========================================================================


$sql4 = "SELECT * FROM tbl_schedule WHERE Sched_Day LIKE '%D4%' ";
$result4 = mysqli_query($con, $sql4);
echo '<hr>';
echo '<h2 align="center"> Day Four </h2>';
echo '<hr>';

echo "<table  width='100%'>";
echo "<tr>";
	echo "<th width='10%'>TIME</th>";
	echo "<th width='75%'>EVENT</th>";
	echo "<th width='15%'>VENUE</th>";
echo "</tr>";
if(mysqli_num_rows($result4) > 0){
	while($row4 = mysqli_fetch_assoc($result4)){
		echo "<tr>";
		echo "<td>".$row4["Sched_Time"]."</td>";
		echo "<td>".$row4["Sched_Event"]."</td>";
		echo "<td>".$row4["Sched_Venue"]."</td>";
		echo "</tr>";
	}

echo "</table>";
}
else{
	echo "No Record Found";
}



?>