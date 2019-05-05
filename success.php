<html>
<head>
<title>Welcome </title>
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
include("user_booking_detail.php");
mysql_connect("localhost","root","","parking") or die("Problem with connection...");
mysql_select_db("parking");
	if($tmp_slot<41)
	{
		$amount=50;
	}
	else
	{
		$amount=25;
	}
	$num=rand(98525,99999);

mysql_query("INSERT INTO booking(transaction_id,email,venue,day,slot,payment	) VALUES($num,'$tmp_username','$tmp_building','$tmp_day','$tmp_slot',$amount)");
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<center><h1>Payment received successfully</h1></center>";
echo "<br />";
echo "<br />";
echo "<br />";

?>

	<h2><center> Venue: <?php echo $tmp_building; ?>
	<center> Day: <?php echo $tmp_day; ?>
	<center> Slot: <?php echo $tmp_slot; ?>
    <center> Price: <?php echo $amount; ?></h2>

<?php
include ("mail_confirm.php");

?>
</body>
</html>