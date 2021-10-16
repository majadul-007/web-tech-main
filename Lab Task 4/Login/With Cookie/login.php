<form action="welcome.php" method="post">
	Username:
	<input type="type" name="uname" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>"><br>
	Password:
	<input type="password" name="pass" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"><br>
	<input type="checkbox" id="login" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>><label for="login">Remember Me</label><br>
	<input type="submit" name="login" value="Login">
	
</form>