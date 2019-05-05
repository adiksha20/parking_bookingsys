<?php
session_start();
//$date = date('F d, Y, g:i:s a');
//echo "Today " .$date."<br />";

if(!isset($_SESSION['username']))
{
	echo "Not a session";
}
else
{
	
	$tmp_username = $_SESSION['username'];
	
	
}

?>