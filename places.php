
<html>
<head>
<title>
Welcome to Vit
</title>
<style>
div.div1
{
background-color:navy;
width:100%;
margin:0;
padding:0;
position:absolute;
left:0%;
top:0%;

font-size:80px;
text-shadow:15px 15px 15px black,
                       20px 20px 20px black;
color:white;
height:100px;
}

div.div1:hover
{
background-color:navy;
opacity:1;
}

div.div2
{
margin-top:96px;
float:left;
margin-left:-6px;
border:5px black solid;

width:49.5%;}

.div3
{
float:right;

width:49.5%;
margin-top:96px;
border:5px black solid;
margin-right:-6px;
}

img
{
height:300px;
width:100%;
margin:0px;
padding:0px;

}
#img1
{
height:290px;
}
img:hover, :hover
{
opacity:0.8;
border-color:orange;
}

.div4
{
width:50.2%;
margin-left:-6px;
float:left;
}
.div5
{
float:right;
width:49.5%;
border:5px black solid;
margin-right:-6px;
}


</style>

<script>

function silver()
{
document.getElementById("demo").innerHTML="<i><center>Silver Jublie Tower<center></i>";
}
function tt()
{
document.getElementById("demo").innerHTML="<center><i>Technology Tower</i></center>";
}

function mb()
{
document.getElementById("demo").innerHTML="<center><i>VIT Main Building (MGR Block)</i></center>";
}
function lib()
{
document.getElementById("demo").innerHTML="<center><i>Periyar Central Library</i></center>";
}
function Area()
{
document.getElementById("demo").innerHTML="<center><i>Please Select Your <q>AREA</q></i></center>";
}

</script>

</head>

<body>

<div class="div1" id="demo">
<center>
<i>
<b>Please Select Your <q>AREA</q></b>
</i>
</center>
</div>

<div class="div2" >
<a href="building.php?venue=SJT" ><img onmouseover="silver()" onmouseout="Area()" src="2.jpe" />
</div> 


<div class="div3">
<a href="building.php?venue=TT" ><img onmouseover="tt()" onmouseout="Area()" src="1.jpg" /></a>
</div> 

<div class="div4">
<a href="building.php?venue=LIB" ><img onmouseover="lib()" onmouseout="Area()" src="library.jpeg" /></a>
</div> 


<div class="div5">
<a href="building.php?venue=MB" ><img onmouseover="mb()" onmouseout="Area()" id="img1" src="3.jpg" /></a>
</div> 

</body>
</html>




