<?php
	
	error_reporting(0);
	require('connect.php');
	$username=htmlentities($_POST['username']);
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$college=$_POST['college'];
	$query="INSERT INTO login (username,password,email,college) values('".mysqli_real_escape_string($dbc,$username)."','".mysqli_real_escape_string($dbc,$pass)."','".mysqli_real_escape_string($dbc,$email)."','".mysqli_real_escape_string($dbc,$college)."')";
	if($username!=''&&$pass!=''&&$email!=''&&$college!='')
	{$result = mysqli_query($dbc,$query);
	session_start();
		$_SESSION['username']=$username;
		$_SESSION['check']=1;
		header( "Location: home.php" );}
	// else
	// echo "Please fill all areas";
	// header( "Location: index.php" );

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
<div></div>
<div id="main1"><div id="login">Sign Up</div>
	<form id="form1" method="post" action="signup.php">
		<input type="text" name="username" required class="formInput" placeholder="Username"><br><br>
		<input type="password" name="password" required class="formInput" placeholder="Password"><br><br>
		<input type="text" name="email" required class="formInput" placeholder="email"><br><br>
		<input type="text" name="college" required class="formInput" placeholder="College Name"><br><br>
		<input type="submit" name="submit" value="Signup" class="submit">
		
		<br><br><br><br>
		
	</form>
</div>

<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>