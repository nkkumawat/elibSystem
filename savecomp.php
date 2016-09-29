<?php
	require('connect.php');
	$bookdisc=$_POST['bookdisc'];
	$Bookname=$_POST['Bookname'];
	$image=$_POST['image'];
	$bookaddr=$_POST['bookaddr'];
	if ($Bookname!='') {
		# code...
	
	$query="INSERT INTO elibsavecomp (image,bookdisc,bookaddr,Bookname) values('".mysqli_real_escape_string($dbc,$image)."','".mysqli_real_escape_string($dbc,$bookdisc)."','".mysqli_real_escape_string($dbc,$bookaddr)." ','".mysqli_real_escape_string($dbc,$Bookname)."')";
	$result = mysqli_query($dbc,$query);
	header( "Location: form.php" );}
?>