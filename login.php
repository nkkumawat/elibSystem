<?php
	

	require('connect.php');
	$username=($_POST['username']);
	$pass=($_POST['password']);
	$query="SELECT *FROM login WHERE username='$username'";
	$result = mysqli_query($dbc,$query);
	$ans=mysqli_fetch_assoc($result);

	if($username!=''){
	if($username==$ans['username']&&$pass==$ans['password'])
	{
		echo "Welcome";
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['check']=1;
		header( "Location: home.php" );
	}

	else{

	echo "Password incorrect ";
	
	// session_start();
	// $_SESSION['username']="Password incorrect ";
	// header( "Location: index.php" );
	}
}
else{

	echo "Password incorrect ";
	
	// session_start();
	// $_SESSION['username']="Password incorrect ";
	// header( "Location: index.php" );
	}


?>

