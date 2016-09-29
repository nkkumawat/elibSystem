<?php
session_start();
// require 'login.php';
if(!$_SESSION['check'])
{
	$ip=$_SERVER['REMOTE_ADDR'];
	echo $ip."\n";
	echo "Session Expired";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<div id="header">
	<div id="nameOfUser"><?php  echo "Welcome : <b>".$_SESSION['username']."</b>";if( error_reporting(1))
	{
		// exit();
	}
 ?></div>
		<div id="logo"><img src="images/nk.png" id="logoImage"></div>
		<div id="name">E-Library
		<span>A complete Web Library</span></div>
		<form id="formSearch" method="post" action="search.php">
			<input placeholder="Book Name" type="text" name="bookName">
			<input type="submit" name="submit" value="search">
		</form>
	</div>
	<div id="navigation">
		<table id="table-navigation">
			<tr>
				<td class="menu" id="menu1"><b>Branch<b></td>
				<td class="menu" id="menu2"><b>Language<b></td>
				<td class="menu" id="menu3"><b>Magazine<b></td>
				<td class="menu" id="menu4"><b>Ask a Book</b></td>
				<td class="menu" id="menu5"><b>Libraries<b></td>
				<td class="menu" id="menu6"><b>Contact Us<b></td>
				<td class="menu" id="menu7" ><b>Logout<b></td>
			</tr>
		</table>
	
		</div>
			<div id="Branch">
			<table id="tableBranch">
				<tr class="BranchRow"><td class="Branchtd" id="computer">Computer Science</td></tr>
				<tr class="BranchRow"><td class="Branchtd" id="it">Information Technology</td></tr>
				<tr class="BranchRow"><td class="Branchtd" id="Electrical">Electrical </td></tr>
				<tr class="BranchRow"><td class="Branchtd" id="electronics">Electronics</td></tr>
				<tr class="BranchRow"><td class="Branchtd" id="civil">Civil</td></tr>
				<tr class="BranchRow"><td class="Branchtd" id="mech">Mechenical</td></tr>
				<tr class="BranchRow"><td class="Branchtd" id="chem">Chemical</td></tr>
				<tr class="BranchRow"><td class="Branchtd" id="produ">Production</td></tr>
				<?php

				?>
			</table>
	</div>
	<div id="Library">
			<table id="tableBranch">
				<tr class="BranchRow"><td class="Branchtd" id="computer"><a href="">IIT Bombey</a></td></tr>
				<tr class="BranchRow"><td class="Branchtd"><a href="">IIT Delhi</a></td></tr>
				<tr class="BranchRow"><td class="Branchtd"><a href="">IIT Kanpur</a> </td></tr>
				<tr class="BranchRow"><td class="Branchtd"><a href="">IIT BHU</a></td></tr>
				<tr class="BranchRow"><td class="Branchtd"><a href="">IIT Khagrapur</a></td></tr>
				<tr class="BranchRow"><td class="Branchtd"><a href="">IIT Rurkee</a></td></tr>
				<tr class="BranchRow"><td class="Branchtd"><a href="">NIT Jaipur</a></td></tr>
				<tr class="BranchRow"><td class="Branchtd"><a href="">NIT Wrangle</a></td></tr>
				<?php

				?>
			</table>
	</div>
	<!-- footer ==================== -->
	<div id="footer">
		<table id="tablefooter">
			<tr class="footertablerow">
				<td class="footertabledata"><b>Branch</b><hr>
				<a href="computer.php">Computer</a><br>
				<a href="mechenical.php">Mechenical</a><br>
				<a href="electrical.php">Electrical</a><br>
				<a href="electronics.php">Electronics</a><br>
				<a href="civil.php">Civil</a></td>
				<td class="footertabledata"><b>Library</b><hr>
				<a href="#">IIT Bombay</a>
				<br>
				<a href="#">IIT Delhi</a><br>
				<a href="#">IIT Kanpur</a><br>
				<a href="#">IIT Khagarpur</a><br>
				<a href="#">IIT BHU</a></td>
				<td class="footertabledata"><b>Resources</b><hr>
				
				<a href="#">w3schools.com</a>
				<br>
				<a href="#">bookboon.com</a>
				<br>
				<a href="#">tutorialspoint.com</a>
				<br>
				<a href="#">@</a>
				<br>
				<a href="#">D</a></td>
				
				<td class="footertabledata"><b>About Us</b><hr>FE & BE Doveloper<br>
				<a href="#">
				Narendra Kumawat</a>
				<br>
				FE & BE Doveloper<br>
				<a href="#">Anuj Kumar</a>
				<br>
				<br>
				<td class="footertabledata"></td>	

				<td class="footertabledata" style="float: right;"><br><br><br><br><br><br><br>&copy Copyright 2016</td>
				
			</tr>
		</table>
	</div>

<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/home.js"></script>
</body>
</html>