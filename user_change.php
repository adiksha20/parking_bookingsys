<?php
include ("clone_user_session.php");
include 'dbh1.php';
$newname = $_REQUEST['newname'];
$newlast = $_REQUEST['newlast'];
$newpassword = md5($_REQUEST['newpassword']);
$newphone = $_REQUEST['newphone'];
$newcountry = $_REQUEST['newcountry'];


//mysql_connect("localhost","root","") or die("Problem with connection...");

//mysql_select_db("parking");

$query="UPDATE users SET first_name='$newname', last_name='$newlast', password='$newpassword', contact=$newphone, country='$newcountry' WHERE email='$tmp_username' ";
$res = mysqli_query($conn,$query);


echo "Your values have been updated succesfully!";
header("Refresh:2; url=profile.php");
mysqli_close();

?>