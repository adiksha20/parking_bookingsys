
<?php
session_start();

if(!isset($_SESSION['username']))
{
	echo "Access Denied!";
	exit;
}
else
{
	
	$tmp_username = $_SESSION['username'];
	//echo $tmp_username;
	//echo "<br />";
	$tmp_building = $_SESSION['building'];
	//echo $tmp_building;
	//echo "<br />";
	$tmp_day = $_SESSION['day'];
	//echo $tmp_day;
	//echo "<br />";
	$tmp_slot = $_SESSION['slot'];
	//echo $tmp_slot;
}
?>