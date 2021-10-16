

	<?php include_once('index.php') ?>
	<div class="container-wrapper">

		<form action="welcome.php" method="post">
			<fieldset>
				<legend>LOGIN</legend>
				Username:
				<input type="type" name="uname" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>"><br><br>
				Password:
				<input type="password" name="pass" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"><br><br>
				<input type="checkbox" id="login" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>><label for="login">Remember Me</label><br><br>
				<input type="submit" name="login" value="Login">
				
			</fieldset>
		</form>
	</div>