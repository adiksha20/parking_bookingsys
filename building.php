<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo "Not a session";
}
else
{
	$tmp_username = $_SESSION['username'];
	echo $tmp_username;
	//$building = "SJT";
	echo "<br />";
	$venue=$_REQUEST['venue'];
	echo $venue;
	
	$_SESSION['building'] =  $venue;
	include("days.php");
}

?>