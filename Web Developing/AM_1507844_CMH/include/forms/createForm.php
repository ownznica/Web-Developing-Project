<!DOCTYPE html>
<html>
<head>
	<title>Create Movie</title>

	<script type="text/javascript">
		<?php 
		include '../script.js';
		?>
	</script>
	<style>
	.error{color: #FF0000;}
	</style>
<?php 
include '../datadef.php';
?>
</head>
<body>
	<form name = "FormCreate" action='../create.php' method='post' enctype="multipart/form-data">
		<table>
			<tr>
				<td>Movie Title</td>
				<td><input type='text' id="title" name='title'/>
				<span class="error" id="errTitle"></span>
				</td>
			</tr>
			<tr>
				<td>Year</td>
				<td>
					<select id="year" name="year">
						<option value="0">--Select the Year--</option>
						<?php 
						$ygroup = ["2018", "2017", "2016"];
						foreach($ygroup as $i){
							echo "<option value=".$i.">".$i."</option>";
						}	
						?>						
					</select>
					<span class="error" id="errYear"></span>
				</td>
			</tr>
			<tr>
				<td>Genres</td>
				<td>
					<select id="type" name="genre">
						<option value="0">--Select Genre--</option>
						<?php 						
						foreach($genreDef as $gen=>$description){
							echo "<option value=".$gen.">".$description." </option>";
						}
						?>						
					</select>
					<span class="error" id="errGenre"></span>
				</td>
			</tr>
			<tr>
				<td>Image File</td>
				<td><input type="file" id="imgName" name="imgName">
				<span class="error" id="errImgName"></span>
				</td>
			</tr>
			<tr>
				<td>Synopsis</td>
				<td><textarea name="synopsis" rows="10" cols="50"></textarea>
				<span class="error" id="errSynopsis"></span>
				</td>
			</tr>
			<tr>
				<td>
					<input type='submit' value='Save' onclick="return validateCreateFrom()" /> 
				</td>
			</tr>
			<tr>
			<td>
				<a href='../../admin/management.php'>Back to management</a>
			</td>
				
			</tr>
		</table>
	</form>
	<?php include '../create.php'; ?>
</body>
</html>