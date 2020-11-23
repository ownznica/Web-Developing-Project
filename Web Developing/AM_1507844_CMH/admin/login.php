
<?php 
session_start();
include '../include/connectDB.php';

$error="";

if($_SERVER["REQUEST_METHOD"]=="POST") {

	$userName=mysqli_real_escape_string($conn,$_POST['name']);
	$passwd=md5(mysqli_real_escape_string($conn,$_POST['password']));

	$sql="SELECT * FROM adminlogin WHERE name='$userName' AND password ='$passwd'";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

	if(is_array($row)){
		$_SESSION["login_user"]=$row['name'];
		$_SESSION["password"]=$row['password'];
		$_SESSION['last_activity'] = time();
		header("Location:management.php");
	}
	else
		$error= "Your Login Name or password is invalid";
}
?>