<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.theme.min.css">

	<script src="style/js/jquery.min.js"></script>
	<script src="style/js/bootstrap.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

	<style>
		h1{
			font-size: 75px;
		}
		
		body{
			font-family: 'Bree Serif', serif;
			background-color: 	#D2B48C;
		}

		table, td{
			font-size: 25px;
		}

		.main {
			padding: 30px;
		}

		.btn{
			padding: 20px;
		}

	</style>

</head>
<body>

	<div class="container-fluid text-center">

		<a href="index.php"><button style="float: left; padding: 20px; margin-top: 10px; background-color: #DEB887; border:none;">< Return</button></a>
		<h1 style="margin-right: 80px;">AAA Movie Library</h1>
		<h1 style="font-size: 50px">Details</h1>

	</div>
	<?php 

	include 'include/connectDB.php';
	include 'include/datadef.php';

	$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Invalid Zone.');

	$query = "SELECT * FROM movie WHERE id='$id'";

	if($result =mysqli_query($conn,$query)){
		if(mysqli_num_rows($result) > 0){
			$row=mysqli_fetch_array($result);
			foreach($genreDef as $key => $val){
				if($row['genre']==$key){
					$description = $val;
				}
			}
			echo '<p style="text-align:center;"><img src="'.$row['imgpath'].'" height="450" width="300"></p>'; 
			echo "<table align='center'>";
			echo "<tr>"
			."<th>Title :</th>"
			."<td>".$row['title']."</td>"
			."</tr>";
			echo "<tr>"
			."<th>Year :</th>"
			."<td>".$row['year']."</td>"
			."</tr>";
			echo "<tr>"
			."<th>Genre :</th>"
			."<td>".$description."</td>"
			."</tr>";
			echo "<tr>"
			."<th>Synopsis:</th>"
			."<td>".$row['synopsis']."</td>"
			."</tr>";
			echo "</table>";
		}else{
			echo "<p>no data</p>";
			echo "<a href='zone.php'>return</a>";
		}

	}else{
		echo "mysqli_query error";
	}

	?>
</body>



</html>