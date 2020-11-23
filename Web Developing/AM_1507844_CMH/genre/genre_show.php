<?php 
include '../include/connectDB.php';
$genre=$_GET['genre'];
$query = "SELECT * FROM movie WHERE genre='$genre'";
if($result = mysqli_query($conn,$query)){
	if(mysqli_num_rows($result) > 0){

		while ($row=mysqli_fetch_array($result)){
			echo"<p><a href='../details.php?id={$row['id']}'>".$row['title']."</a></p>";
		}

	}else{
		echo "no data";
	}
}
else{
	echo "mysqli_query";
}
?>