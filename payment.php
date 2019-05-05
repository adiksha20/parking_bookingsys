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
<br>
	<?php
	//echo "Aayush";
	$tmp_username = $_SESSION['username'];
	echo $tmp_username;
	echo "<br />";
	$tmp_building = $_SESSION['building'];
	echo $tmp_building;
	echo "<br />";
	$tmp_day = $_SESSION['day'];
	echo $tmp_day;
	echo "<br />";
	$tmp_slot = $_SESSION['slot'];
	echo $tmp_slot;
	include("user_link.php");
	?>
<div id="c1"><center><b>Payment Gateway </b></center></div>


<div class="d2"><div class="i2"><h2>Payment Method </h2></div></br>

<table>
<tr>
<td><img id="card" src="cards.jpg">&nbsp&nbsp&n&nbsp&nbsp<img id="card1" src="paypal.png">
</td>
</tr>
</table>

<input type=radio onclick = "window.location='payment_back.php';" name="r1" />Credit Card/Debit Card/Net Banking
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type=radio onclick = "window.location='paypal.php';" name="r1">Paypal




<br><br>



</body>
</head>
</html>
