<?php
if($_POST){ 

	// include database connection
	include 'connectDB.php';
	
	//get values from form
	$title=ucfirst($_POST['title']);
	$year=$_POST['year'];
	$genre=$_POST['genre'];
	
	include 'imgTransfer.php';
	
	$imgpath = substr($target_file,3);
	
	$synopsis=$_POST['synopsis'];
	
	if(!preg_match("/^[A-Z]$/",($title[0]))){
		$tname='Other';
	}else{
		$tname=$title[0];
	}

     // insert data into mysql
	$sql= "INSERT INTO movie (title, year, genre, imgpath, synopsis, tname) VALUES ('$title', '$year','$genre', '$imgpath', '$synopsis', '$tname')";
	$result=mysqli_query($conn,$sql);
	if($result)
		echo "<br>Record was saved.";
	else 
		echo "<br>Connection ERROR";
	echo "<br>";
	echo "<a href='../admin/management.php'>Back to management</a>";
} 

?>  