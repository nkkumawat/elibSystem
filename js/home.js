
$('#Branch').slideUp(0);
$('#Library').slideUp(0);

$('#menu1').on('mouseover', function()
	{
		
		
		$('#Branch').slideDown(300);
		$('#menu1').css('background-color',"#169AB2");
		$('#Library').slideUp(300);
		$('#menu5').css('background-color',"transparent");
			
	});

$('#Branch').on('mouseleave', function()
	{
		
		
		$('#Branch').slideUp(300);
		$('#menu1').css('background-color',"transparent");
			
	});


$('#menu2').on('mouseover', function()
	{
		
		$('#Branch').slideUp(300);
		$('#menu1').css('background-color',"transparent");
		$('#Library').slideUp(300);
		$('#menu5').css('background-color',"transparent");
			
	});

$('#menu3').on('mouseover', function()
	{
		
		$('#Branch').slideUp(300);
		$('#menu1').css('background-color',"transparent");
		$('#Library').slideUp(300);
		$('#menu5').css('background-color',"transparent");
			
	});

$('#menu4').on('mouseover', function()
	{
		
		$('#Branch').slideUp(300);
		$('#menu1').css('background-color',"transparent");
		$('#Library').slideUp(300);
		$('#menu5').css('background-color',"transparent");
			
	});


$('#menu6').on('mouseover', function()
	{
		
		$('#Branch').slideUp(300);
		$('#menu1').css('background-color',"transparent");
		$('#Library').slideUp(300);
		$('#menu5').css('background-color',"transparent");
			
	});

$('#menu7').on('mouseover', function()
	{
		
		$('#Branch').slideUp(300);
		$('#menu1').css('background-color',"transparent");
		$('#Library').slideUp(300);
		$('#menu5').css('background-color',"transparent");
			
	});








$('#menu5').on('mouseover', function()
	{
		
		
		$('#Library').slideDown(300);
		$('#menu5').css('background-color',"#169AB2");
		$('#Branch').slideUp(300);
		$('#menu1').css('background-color',"transparent");
			
	});

$('#Library').on('mouseleave', function()
	{
		
		
		$('#Library').slideUp(300);
		$('#menu5').css('background-color',"transparent");
			
	});

$('#computer').on('click', function()
	{
		
		
		var url="computer.php";
		var win=window.open(url,"_self");
			
	});

$('#Electrical').on('click', function()
	{
		
		
		var url="electrical.php";
		var win=window.open(url,"_self");
			
	});

$('#electronics').on('click', function()
	{
		
		
		var url="electronics.php";
		var win=window.open(url,"_self");
			
	});
$('#menu7').on('click', function()
	{
		
		
		var url="logout.php";
		var win=window.open(url,"_self");
			
	});

$('#it').on('click', function()
	{
		
		
		var url="information.php";
		var win=window.open(url,"_self");
			
	});
$('#civil').on('click', function()
	{
		
		
		var url="civil.php";
		var win=window.open(url,"_self");
			
	});
$('#mech').on('click', function()
	{
		
		
		var url="mechenical.php";
		var win=window.open(url,"_self");
			
	});
$('#produ').on('click', function()
	{
		
		
		var url="production.php";
		var win=window.open(url,"_self");
			
	});
$('#chem').on('click', function()
	{
		
		
		var url="chemical.php";
		var win=window.open(url,"_self");
			
	});

window.scroll.visible = 'false';