<?php

//$date = date('F d, Y, g:i:s a');
//echo "Today " .$date."<br />";
include 'dbh1.php';

if(!isset($_SESSION['username']))
{
	echo "Not a session";
}
else
{
	
	$temp_username = $_SESSION['username'];
	//echo $temp_username;
	
	//mysqli_connect("localhost", "root", "","parking");
	
	$name = "SELECT first_name FROM users WHERE email=$temp_username";
	$res = mysqli_query($conn,$name);
	$first = "";
	

	/*while($row = mysql_fetch_assoc($name)){
		$first= $row['first_name'];
	}
		echo $first;*/

	include("type.php");
}

?>