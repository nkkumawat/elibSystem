<?php
require 'sample.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Computer Science</title>
	<link rel="stylesheet" type="text/css" href="css/computer.css">
</head>
<body>
<div id="nameof">Civil </div>
	
	<table id="navigation1">
		<tr class="tableRow"><td class="tableData"><a href="save/Let us C.pdf">&nbsp&nbspC</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspC#</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspC++</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspJava</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspAndroid</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspPython</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspJava Script</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspJava EE</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspPhp</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspRuby</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspPerl</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspASP.NET</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbsp.NET</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspNetworking</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspXML</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspMicrosoft office</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspHTML</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspGraphics</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspUnix</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspAjex</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspCss</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspPhotoshop</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspJQuery</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspJava ME</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspSoftware Engineering</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspWindows</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspLinux</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspWeb Designing</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspDatabase</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspiPhone Programming	</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspMySql</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspSvg</a> </td></tr>
		<tr class="tableRow"><td class="tableData"><a href="#">&nbsp&nbspMobile Development</a> </td></tr>
		
		<?php



		?>
		
	</table>


	<div id="main">
	<table id="table1">
	
		
	<?php
			require('connect.php');
			$query="SELECT *FROM elibsavemech ";
			$result = mysqli_query($dbc,$query);
			$ans=mysqli_fetch_assoc($result);


			while($ans=mysqli_fetch_assoc($result))
			{
				
				echo  '<tr class="tableRow1">
				<td class="tableData1"><img src="images/'.$ans['image'].'" class="image"><p class="description"><a href="pdf/'.$ans['bookaddr'].'">'.$ans['Bookname'].'</a><br>'.$ans['bookdisc'].'</p></td>
				</tr>';
				// echo "nk";
			}
				// echo "nk";
	?>

	

	</table>


</div>
	


</body>
</html>