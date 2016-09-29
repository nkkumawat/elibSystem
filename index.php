<?php
session_start();
$_SESSION['check']=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">

</head>
<body>
<div></div>
<div id="main"><div id="login">Login</div>
	<form id="form" method="post" action="login.php">
		<input type="text" name="username" required class="formInput" placeholder="Username"><br><br>
		<input type="password" name="password" required class="formInput" placeholder="Password"><br><br>
		<input type="submit" name="submit" value="Login" class="submit">
		
		<br><br><br><br>
		<a href="forgotpassword.php">Forgot password</a>
	</form>
	<button value="Signup" class="submit" id="signup">Signup</button>
</div>

<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>