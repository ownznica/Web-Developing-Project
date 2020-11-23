<?php 

include '../include/connectDB.php';

$year=$_GET['year'];

$query = "SELECT * FROM movie WHERE year='$year'";

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