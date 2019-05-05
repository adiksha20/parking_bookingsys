<?php
include_once('dbh1.php');

session_start();

if($_POST){

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if($_SESSION['username'] && $_SESSION['password'])
{
	
	$username=$_SESSION['username'];
	//echo $username;

	$query="SELECT * FROM users WHERE email='$username'";
	$res = mysqli_query($conn,$query);
	
	$numrows = mysqli_num_rows($res);
	
	if($numrows != 0)
	{
		while($row = mysqli_fetch_assoc($res))
		{
			$dbusername = $row['email'];
			$dbpassword = $row['password'];
			
		}
		if($_SESSION['username']==$dbusername)
		{
			if($_SESSION['password']==$dbpassword)
			{
				header("location: user_users.php");
			}
			else
			{
				echo "Your password is incorrect!";
			}
		}
		else
		{
			echo "Your username is incorrect!";
		}
	}
	else
	{
		echo "This username is not registered!";
	}	
}
else
{
	echo "You have to type a name and password!";
}
}
else
{
	echo "Access denied!";
	exit;
}

?>