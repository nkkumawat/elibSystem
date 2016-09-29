<?php
session_start();
$_SESSION['check']=0;

error_reporting(0);
require('connect.php');
$username=$_POST['username'];
$query="SELECT*FROM login WHERE username ='$username' ";
$result = mysqli_query($dbc,$query);
	$ans=mysqli_fetch_assoc($result);


// send
	$sent=0;
$to=$ans['email'];
$subject="password forgot";
$body=rand(2000,9900);
$headers='FROM: admin@elib.in';
mail($to,$subject,$body,$headers);
if($ans['email']!='')
{
	$sent=1;
}
else
{
	$sent=2;
}
// echo $body;
// echo $ans['email'];
// session_start();
// $_SESSION['otp']=$body;
// $_SESSION['user']=$username;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">

</head>
<body>
<div></div>
<div id="main"><div id="login">Send Me Link to Email  </div>
	<form id="form" method="post" action="forgotpassword.php">
		<input type="text" name="username" class="formInput" required placeholder="Username"><br><br>
		<input type="submit" name="submit" value="Email" class="submit">
		
		<br><br><br><br>
		<?php
			if($sent==1)
			{
				echo "Email Sent";
			}
			 if($sent==2)
			{
				echo "...";
			}

		?>
		
	</form>
	
</div>

<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>