<html>
<head>

<style>

img
{
width:16px;
height:15px;
}
.d2
{
padding:100px;
background-color:white;
border:1px solid rgb(230,230,230);
cursor:pointer;
line-height:25px;
width:1000px;
height:2000px;
margin-left:auto;
margin-right:auto;
opacity:0.9;


margin-top:0px;
color:orange;
background-color:black;

}

body
{
background-image:url(background.jpeg);
margin:0;

}
#c1
{
font-size:18px;
font-family:helvetica;
background-color:#990033;
margin-top:-20;
width:100%;
height:13%;
font-size:50px;

color:white;
}
#card
{
width:40%;
height:200px;
}
#card1
{
margin:auto;
width:40%;
height:200px;
}


</style>
<body>
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
	
	$_SESSION['day'] =  $day;
}

?>
<?php include("user_link.php");?>
<div id="c1"><center><b>Vehicle </b></center></div>


<div class="d2"><div class="i2"><h2>Choose vehicle type</h2></div></br>

<table>
<tr>
<td><img id="card" src="bike.png">&nbsp&nbsp&n&nbsp&nbsp<img id="card1" src="car.jpeg">
</td>
</tr>
</table>

<input type=radio onclick = "window.location='bike_pre_slot.php';" name="r1" />Two-Wheeler Parking
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<input type=radio onclick = "window.location='pre_slot.php';" name="r1">Four-Wheeler Parking




<br><br>



</body>
</head>
</html>
