<?php 

	$target_dir = "../image/";
	$target_file = $target_dir . basename($_FILES["imgName"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["imgName"]["tmp_name"], $target_file)

?>