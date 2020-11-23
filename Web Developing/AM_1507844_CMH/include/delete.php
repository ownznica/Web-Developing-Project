<?php 
include 'connectDB.php';

$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
$query = "DELETE FROM movie WHERE id ='$id' ";
if(mysqli_query($conn,$query)){
	echo "Record was deleted successfully";
	echo "<br>";
	echo "<a href='../admin/management.php'>Back to read records</a>";
}
else
	echo "ERROR: Could not execute the delete."

 ?>