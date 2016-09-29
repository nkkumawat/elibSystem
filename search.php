<?php
require('sample.php');
require('connect.php');
	error_reporting(1);
	$bookname=('%'.$_POST['bookName'].'%');
	
	$query="SELECT *FROM elibsavecomp WHERE Bookname LIKE '$bookname'";
	$result = mysqli_query($dbc,$query);
	
	$query1="SELECT *FROM elibsaveece WHERE Bookname LIKE '$bookname'";
	$result1 = mysqli_query($dbc,$query1);
	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<body>
<table id ="table">
	<tr class="tablerow">
		<th class="tabledata">Discription</td>
		<th class="tabledata">Book Name</td>

	</tr>


	<?php
		while($ans=mysqli_fetch_assoc($result)){
		echo '<tr class="tablerow">
		<td class="tabledata">'.$ans['bookdisc'].'</td>	<td class="tabledata"><a href="pdf/'.$ans['bookaddr'].'">'.$ans['Bookname'].'</a></td>
	</tr>';}
	?>
	<?php
		while($ans1=mysqli_fetch_assoc($result1)){
		echo '<tr class="tablerow">
		<td class="tabledata">'.$ans1['bookdisc'].'</td>	<td class="tabledata"><a href="pdf/'.$ans1['bookaddr'].'">'.$ans1['Bookname'].'</a></td>
	</tr>';}
	?>
	

</table>
</body>
</html>