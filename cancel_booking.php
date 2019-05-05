<?php
include("clone_user_session.php");
$day=$_REQUEST['day'];
$venue=$_REQUEST['venue'];
$slot=$_REQUEST['slot'];
/*echo $tmp_username;
echo $day;
echo $venue;
echo $slot;*/
mysql_connect("localhost","root","") or die("Problem with connection...");

mysql_select_db("parking");




mysql_query("DELETE FROM booking WHERE day='$day' and venue='$venue' and slot='$slot' and email='$tmp_username'");


echo "Your booking has been cancelled!";
header("Refresh:2; url=cancellation.php");
mysql_close();

?>
