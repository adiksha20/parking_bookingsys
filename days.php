<html>
<head>
<style>
body
{
margin:0;
background-image:url(p.jpg);
background-repeat:no-repeat;

}
div.div
{
width:100%;
height:15%;
background-color:#990033;
margin-top:-35px;
color:white;
}

div.mon
{
width:20%;
height:30%;
background-color:#212f3d;
float:left;
margin-left:70px;
border: 2px black solid;
border-radius:5px;
}

div.tue
{
width:20%;
height:30%;
background-color:orange;
float:left;
margin-left:200px;
border: 2px black solid;
border-radius:5px;
}

div.wed
{
width:20%;
height:30%;
background-color: #5f5c85 ;
float:left;
margin-left:200px;
border: 2px black solid;
border-radius:5px;
}

div.thu
{
width:20%;
height:30%;
background-color: #FF5733
;
float:left;
margin-left:70px;
margin-top:70px;
border: 2px black solid;
border-radius:5px;
}

div.fri
{
width:20%;
height:30%;
background-color:#DAF7A6;
float:left;
margin-left:200px;
margin-top:70px;
border: 2px black solid;
border-radius:5px;
}

div.sat
{
width:20%;
height:30%;
background-color:olive;
float:left;
margin-left:200px;
margin-top:70px;
border: 2px black solid;
border-radius:5px;
}

#day
{
padding-top:40px;
font-size:35;
text-align:center;

}

p.p
{
padding-top:5px;
font-size:35;
text-align:center;

}

div.mon:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.tue:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.wed:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.thu:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.fri:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.sat:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}

a
{
text-decoration:none;
color:black;
}
#week
{
float:left;
height:100%;
}
</style>

</head>

<body>


<div class="div">
<img id="week" src="week.jpg">
<p class="p"><b>Please Select Your Parking Day<br><h2><?php include("user_link.php");?></h2></b></p>
</div>
<br><br><br>

<a href="vehicle.php?day=Monday"><div class="mon" >
<p id="day">Monday</p>
</div></a>

<a href="vehicle.php?day=Tuesday"><div class="tue">
<p id="day">Tuesday</p>
</div></a>

<a href="vehicle.php?day=Wednesday"><div class="wed">
<p id="day">Wednesday</p>
</div></a>

<a href="vehicle.php?day=Thursday"><div class="thu">
<p id="day">Thursday</p>
</div></a>

<a href="vehicle.php?day=Friday"><div class="fri">
<p id="day">Friday</p>
</div></a>

<a href="vehicle.php?day=Saturday"><div class="sat">
<p id="day">Saturday</p>
</div></a>

</body>

</html>
