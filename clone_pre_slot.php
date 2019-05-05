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
	$day=$_REQUEST['day'];
	echo $day;
	$slot=$_REQUEST['slot'];
	echo $slot;
	
	$_SESSION['day'] =  $day;
	
	if($slot<41)
	{
		include("slots.php");
	}
	else
	{
		include("bike_slots.php");
	}
}

?>