<?php

session_start();

if(!isset($_SESSION['username']))
{
	echo "Access Denied!";
	exit;
}
else
{
	include("user_session.php");
}

?>