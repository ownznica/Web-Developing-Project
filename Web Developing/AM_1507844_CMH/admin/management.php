<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		table, th, td, tr {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
		td{
			text-align: center;
		}

		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}		
	</style>	
	<h1>Management</h1>
	<a href="logout.php"><button>log out</button></a>
	<?php
	
	include '../include/connectDB.php';
	include '../include/datadef.php';
	include 'expire.php';

	$query = "SELECT * FROM movie";
	if($result = mysqli_query($conn, $query)){
		if(mysqli_num_rows($result) > 0){
			echo "
			<table style = 'width:100%'>
				<tr>
					<th>Title</th>
					<th>Year</th>
					<th>Genre</th>
					<th>Image Path</th>
					<th>Synopsis</th>
					<th>Title ShortForm</th>
					<th>Operation</th>
				</tr>
				";
				while($row=mysqli_fetch_array($result)){
					foreach($genreDef as $key => $val){
						if($row['genre']==$key){
							$description = $val;
						}
					}
					echo"<tr>
					<td>".$row['title']."</td>
					<td>".$row['year']."</td>
					<td>".$description."</td>
					<td>".$row['imgpath']."</td>
					<td width='50%'>".$row['synopsis']."</td>
					<td>".$row['tname']."</td>
					<td width='7%'>
						<a href='../include/forms/updateForm.php?id={$row['id']}'>Edit</a>
						/
						<a href='#' onclick='delete_user({$row['id']})'>Delete</a>
					</td>
				</tr>";
			}
			echo"</table>";
			echo"<div>
			<a href='../include/forms/createForm.php'><button class='button'>Add movie</button></a>
		</div>";
	}
	else 
		{ echo "No records found.";
	echo "<a href='../include/forms/createForm.php'><button >Add movie</button></a>";
}
}
else{
	echo "error: could not execute sql";
	mysqli_error($conn);
}
?>

<script>
	<?php 
	include '../include/script.js';
	?>
</script>
</body>
</html>

