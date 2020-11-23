<?php 

include '../include/connectDB.php';
include '../include/datadef.php';

$tname = $_GET['tname'];
$query = "SELECT * FROM movie WHERE tname='$tname'";

if($result =mysqli_query($conn,$query)){
	if(mysqli_num_rows($result) > 0){
		while ($row=mysqli_fetch_array($result)){
			echo"<p><a href='../details.php?id={$row['id']}'>".$row['title']."</a></p>";
		}
	}else{
		echo "<p>no data</p>";
	}
}else{
	echo "mysqli_query error";
}
?>