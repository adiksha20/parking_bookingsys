<html>
<head>
<title>My Bookings</title>
<style>
#img
{
float:left;
width:50px;
height:50px;
margin-top:6px;
margin-left:5px;
}
div.a
{
background-color:black;
color:white;
height:60px;
font:50px verdena italic;
}
div.div1
{
background-color:rgb(7,76,99);
height:100%;
margin-left:400px;
margin-right:400px;
border:5px black solid;
}
body{
margin-top:0px;


}


div.b
{
height:40px;
width:170px;
color:white;
font-size:23px;
margin-top:20px;
text-align:center;
text-align-vertical:center;
background-color:rgb(98,123,128);
margin-bottom:30px;
padding-top:10px;
}
a
{
text-decoration:none;
}
div.b:hover
{
border:black solid 2px;
color:black;
background-color:white;
font-weight:bold;
}

p.p
{
text-align:center;
font-size:25px;
font-weight:bold;
color:rgb(67,160,148);
}

div.hr{
margin-top:-10px;
width:100%;
height:20px;
background-color:black;
margin-bottom:-2px;

}

</style>
<script>
</script>
</head>
<body background="background.jpeg" >

<?php
$date = date('F d, Y, g:i:s a');
//$tmp_username=$_REQUEST['username'];
include("clone_user_session.php");
include 'dbh1.php';

echo $tmp_username;
include("user_link.php");
	//mysql_connect("localhost", "root", "") or die("We couldn't connect!");
	//mysql_select_db("parking");
	
	echo "<table width=\"50%\" align=center border=2>";
	echo "<tr><th width=\"20%\" align= center \">TRANSACTION ID</th>
	<th width=\"20%\" align= center \">Day</th>
	<th width=\"20%\" align= center \">Venue</th>
	<th width=\"20%\" align= center \">Slot</th>
	<th width=\"20%\" align= center \">Cancel Booking</th></tr>";
	
	
	$name = "SELECT * FROM booking WHERE email='$tmp_username'";
	$res = mysqli_query($conn,$name);
	while($row = mysqli_fetch_assoc($res)){
		$day = $row['day'];
		$transac_id=$row['transaction_id'];
		$venue = $row['venue'];
		$slot = $row['slot'];
	
echo "<br />";

	echo "<tr><td align= center>$transac_id</td><td align= center>$day</td><td align= center>$venue</td><td align= center>$slot</td><td align= center><a href='cancel_booking.php?day=$day&venue=$venue&slot=$slot'>Cancel</a></tr>";
	}


?>




</body>
</html>