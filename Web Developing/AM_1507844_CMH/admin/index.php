<!DOCTYPE html>
<html>
<head>
	<title>Admin Log In</title>
</head>
<body>
<?php 
include 'login.php';
 ?>
 	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
		<tr>
			<td><form name="form1" method="post">
				<table width="100%" border="0" cellspacing="1" cellpadding="3">
					<tr>
						<td colspan="3"><strong>Login </strong></td>
					</tr>
					<tr>
						<td width="71">User Name</td>
						<td width="6">:</td>
						<td width="301"><input name="name" type="text" id="name"></td>
					</tr>

					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="password" type="password" id="Password"></td>
					</tr>

					<tr>
						<td colspan="3" align="center"><input type="submit" name="cf_submit" value="Login"></td>
					</tr>
				</table>
			</form>
			<tr> <div style = "font-size:20px; color:red; margin-top:10px"> <?php echo $error; ?> </div> </tr>
		</td>
	</tr>

</table>

</body>
</html>