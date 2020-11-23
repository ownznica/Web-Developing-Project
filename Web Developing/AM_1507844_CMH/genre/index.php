<!DOCTYPE html>
<html>
<head>
	<title>Genres</title>
	
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

		.btn{
			padding: 20px;
		}

		button.accordion {
			background-color: #FFF8DC;
			color: #444;
			cursor: pointer;
			padding: 18px;
			width: 100%;
			border: none;
			text-align: left;
			outline: none;
			font-size: 15px;
			transition: 0.4s;
		}

		button.accordion.active, button.accordion:hover {
			background-color: 	#D2B48C;
		}

		div.panel {
			padding: 0;
			background-color: white;
			max-height: 0;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}
	</style>
</head>
<body>
	<div class="container-fluid text-center">

		<a href="../index.php"><button style="float: left; padding: 20px; margin-top: 10px; background-color: #DEB887; border:none;">< Return</button></a>
		<h1 style="margin-right: 80px;">AAA Movie Library</h1>
		<h1 style="font-size: 50px">Genres</h1>
	</div>
	<div class="container-fluid text-center main">
		<div class="col-md-6">
			<button class="accordion" style="text-align: center;"><h2>Mystery</h2></button>
			<div class="panel">
				<?php 
				$_GET['genre'] = 'M';
				include 'genre_show.php';
				?>
			</div>
			<button class="accordion" style="text-align: center;"><h2>Fantasy</h2></button>
			<div class="panel">
				<?php 
				$_GET['genre'] = 'F';
				include 'genre_show.php';
				?>
			</div>			
		</div>
		<div class="col-md-6">
			<button class="accordion" style="text-align: center;"><h2>Animation</h2></button>
			<div class="panel">
				<?php 
				$_GET['genre'] = 'A';
				include 'genre_show.php';
				?>
			</div>
			<button class="accordion" style="text-align: center;"><h2>Horror</h2></button>
			<div class="panel">
				<?php 
				$_GET['genre'] = 'H';
				include 'genre_show.php';
				?>
			</div>
		</div>
	</div>

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].onclick = function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight){
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				} 
			}
		}
	</script>
</body>
</html>