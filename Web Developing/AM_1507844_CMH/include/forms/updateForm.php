<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
	<script type="text/javascript">
		<?php 
		include '../script.js';
		?>
	</script>
	<style>
	.error{color: #FF0000;}
	</style>
</head>
<body>

	<?php 

	include '../connectDB.php';
	include '../datadef.php';

	if($_GET['id']) {
		$id = $_GET['id'];

		$sql = "SELECT * FROM movie WHERE id = '$id'";
		$result=mysqli_query($conn,$sql);
		$data=mysqli_fetch_array($result);
	}
	?>
	<form name="FormUpdate" action='../update.php' method='post' enctype="multipart/form-data">
		<table>	
			<tr>
				<th>Edit Movie</th>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type='text' name='title' value="<?php echo $data['title'];?>"><span class="error" id="errTitle"></span></td>
			</tr>
			<tr>
				<td>Year </td>
				<td>
					<select id="year" name="year">
						<?php 
						$ygroup = ["2018", "2017", "2016"];
						foreach($ygroup as $i){
							if($data['year'] == $i)
								echo "<option value=".$i." selected>".$i."</option>";
							else
								echo "<option value=".$i.">".$i."</option>";
						}
						?>
					</select>
				</td>
				<td>
			<tr>
				<td>Genre</td>
				<td>
					<select id="type" name="genre">
						<?php 			
						foreach($genreDef as $key => $val){
							$selected = '';
							if($data['genre']==$key)
								echo "<option value=".$key." selected>".$val."</option>";			
							else
								echo "<option value=".$key.">".$val."</option>";
						}								
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Image File</td>
				<td>
				<input type="file" id="imgName" name="imgName">
				<img class="preview" src="<?php echo "../../".$data['imgpath'];?>" style="width:160px;-webkit-border-radius:16px" />
				<span class="error" id="errImgName"></span>
				</td>
			</tr>
			<tr>
				<td>Synopsis</td>
				<td><textarea name="synopsis" rows="10" cols="50"><?php echo $data['synopsis'];?></textarea>
				<span class="error" id="errSynopsis"></span>
				</td>
			</tr>
			<tr>
				<td>
					<input type='hidden' name='id' value="<?php echo $data['id'];?>"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type='submit' value='Save Changes' name="submit1" onclick="return validateUpdateFrom()" />
				</td>
				<td>
					<a href='../../admin/management.php'>Back to read records</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>