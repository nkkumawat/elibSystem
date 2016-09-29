<?php 
session_start();
// $http_referer=$_SERVER['HTTP_REFERER'];
echo $http_referer;

// header("Location:$http_referer");
header( "Location: index.php" );
session_destroy();

?>