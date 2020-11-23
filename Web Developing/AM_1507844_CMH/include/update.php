<?php 
include 'connectDB.php';

$id=$_POST['id'];
$sqlt = "SELECT * FROM movie WHERE id = '$id'";
$resultt=mysqli_query($conn,$sqlt);
$datat=mysqli_fetch_array($resultt);

$title=ucfirst($_POST['title']);
$year=$_POST['year'];
$genre=$_POST['genre'];

include 'imgTransfer.php';

if($target_file==$target_dir){
	$imgpath=$datat['imgpath'];
}else{
	unlink("../".$datat['imgpath']);
	$imgpath = substr($target_file,3);
}

$synopsis=$_POST['synopsis'];

if(!preg_match("/^[A-Z]$/",($title[0]))){
	$tname='Other';
}else{
	$tname=$title[0];
}

$sql = "UPDATE movie SET title='$title', year='$year', genre='$genre', imgpath='$imgpath', synopsis='$synopsis', tname='$tname' WHERE id = '$id'";
$check = "SELECT * FROM movie WHERE id = '$id'";
$result=mysqli_query($conn,$check);
$data=mysqli_fetch_array($result);

if ($conn->query($sql) === true) {
	
	if($data['title']==$title && $data['year']==$year && $data['genre']==$genre && $data['imgpath']==$imgpath && $data['synopsis']==$synopsis && $data['tname']==$tname){
		echo "<br>No changes Made";
		echo "<BR>";
		echo "<a href='../admin/management.php'>Return to list of records</a>";
	}else{
		echo "<br>Update Successful";
		echo "<BR>";
		echo "<a href='../admin/management.php'>List of records</a>";
	}
}

else {
	echo "<br>Connection ERROR";
	echo "<BR>";
	echo "<a href='forms/updateForm.php?id=$id'>Go back to update Form</a>";
}
?>