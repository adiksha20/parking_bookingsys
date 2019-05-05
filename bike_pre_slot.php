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
	echo "<br />";
	$tmp_building = $_SESSION['building'];
	echo $tmp_building;
	echo "<br />";
	$day=$_SESSION['day'];
	echo $day;
	
	include("bike_slots.php");
}
?>