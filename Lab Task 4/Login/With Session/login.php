<?php 

session_start();

$username = "admin";
$password = "admin";

if (isset($_POST['uname'])) {
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;
		header("location:welcome.php");
	}
	else{
		echo "username or password is invalid";
	}
}

 ?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
	Username:
	<input type="type" name="uname" ><br>
	Password:
	<input type="password" name="pass"><br>
	<input type="submit" name="login" value="Login">
	
</form>