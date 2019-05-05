<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo "Not a session";
}
else
{
	
	/*$tmp_username = $_SESSION['username'];
echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo $tmp_username;*/
	
	include("places.php");
}

?>