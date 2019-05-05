<html>
<head>

<style>

.d1
{
padding:15px;
margin:12px;
background-color:white;
border:1px solid rgb(230,230,230);
cursor:pointer;
line-height:25px;
width:200px;
color:orange;
background-color:black;
margin-top:-10px;
margin-left:20px;
opacity:0.9;
}
img
{
width:16px;
height:15px;
}
.d2
{
padding:15px;
background-color:white;
border:1px solid rgb(230,230,230);
cursor:pointer;
line-height:25px;
width:200px;
margin-left:auto;
margin-right:auto;
opacity:0.9;


margin-top:-515px;
color:orange;
background-color:black;

}
.d3
{
padding:15px;
background-color:white;
border:1px solid rgb(230,230,230);
cursor:pointer;
line-height:25px;
width:200px;
float:right;
margin-top:-579px;
position:relative;
margin-right:20px;
color:orange;
background-color:black;
opacity:0.9;
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
width:100%;
height:80px;
}
</style>
<body>
<br>
<div id="c1"><center><b>Choose a payment mode: </b></center></div>
<br>
<br>

<div class="d1"><div class="i1"><form name="form1"><input type=radio name="r1">Credit Card </div>
<img id="card" src="card.jpg">
<p class="p1">
Card Number:<br><input type="text" name="x1"><br><br>
CardHolder Name:<br><input type="text" name="x1"><br><br>
Expiry Date<br>
<select name="select"><option value="-1">select
<option>2014
<option>2015
<option>2016
<option>2017
<option>2018
<option>2019
<option>2020
<option>2021
<option>2022
<option>2023
<option>2024
</select><br><br>
CVV*:<br><input type="text" name="cvv"><br><br>
<button> Make Payment</button>
</p>
</div>


<div class="d2"><div class="i2"><input type=radio name="r1">Debit Card </div></br>
<img id="card" src="cards.jpg">
<p class="p2">
Select Bank<br>
<select name="select"><option value="-1">select
<option>HDFC Bank
<option>Andhra Bank
<option>Bank Of India
<option>Bank of Baroda
<option>Central Bank Of India
<option>Corporation Bank
<option>Bank Of Maharashtra
<option>Canara Bank
<option>Axis Bank
<option>Allahabad Bank
<option>Punjab Bank
</select><br><br>
Card Number:<br><input type="text" name="x1"><br><br>
CardHolder Name:<br><input type="text" name="x1"><br><br>
Expiry Date<br>
<select name="select"><option value="-1">select
<option>2014
<option>2015
<option>2016
<option>2017
<option>2018
<option>2019
<option>2020
<option>2021
<option>2022
<option>2023
<option>2024
</select><br><br>
CVV*:<br><input type="text" name="cvv"><br><br>
<button> Make Payment</button>
</p>
</div>

<div class="d3" ><div class="i3"><input type=radio name="r1">Net Banking<br></div>	<br>
<img id="card" src="net.jpg">
<p class="p3">Select Bank<br>
<select name="select"><option value="-1">select
<option>HDFC Bank
<option>Andhra Bank
<option>Bank Of India
<option>Bank of Baroda
<option>Central Bank Of India
<option>Corporation Bank
<option>Bank Of Maharashtra
<option>Canara Bank
<option>Axis Bank
<option>Allahabad Bank
<option>Punjab Bank
</select><br><br>
<button> Make Payment</button>
</form>
</p>
</div>
</body>
</html>
