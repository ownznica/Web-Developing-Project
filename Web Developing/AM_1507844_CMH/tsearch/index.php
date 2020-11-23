<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.theme.min.css">

	<script src="../style/js/jquery.min.js"></script>
	<script src="../style/js/bootstrap.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

	<style>
		h1{
			font-size: 75px;
		}
		
		body{
			font-family: 'Bree Serif', serif;
			background-color: 	#F5DEB3;
		}

		p strong{
			font-size: 50px;
		}

		.main{
			
			margin-top: 40px;

		}

		.btn{
			padding: 20px;
		}

	</style>

</head>
<body>

	<div class="container-fluid text-center">

		<a href="../index.php"><button style="float: left; padding: 20px; margin-top: 10px; background-color: #DEB887; border:none;">< Return</button></a>
		<h1 style="margin-right: 80px;">AAA Movie Library</h1>
		<h1 style="font-size: 50px">Title</h1>

	</div>

	<div class="container-fluid text-center main">

	<?php 
	
	$alpha = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","Other"];
	
	echo "<div class='row'>";
	foreach($alpha as $key){
		echo '<div class="col-md-4"><h2>'.$key.'</h2>'	;
		$_GET['tname'] = $key;
		include 'tsearch_show.php';
		echo '</div>';
	}
	
	echo "</div>";
	
	?>

	</div> 
	<!-- end of container fluid div -->


	<script >

	</script>
</body>



</html>