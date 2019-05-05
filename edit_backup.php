<html>
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Edit profile form</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="User information form snippet with timezones">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

        
    <style type="text/css">
:root #carbonads-container,
:root .carbonad,
:root .ad.super
{ display: none !important; }</style></head>

<body>
<?php
include ("clone_user_session.php");

echo $tmp_username;
include("user_link.php");
mysql_connect("localhost", "root", "") or die("We couldn't connect!");
	mysql_select_db("parking");
	
	$query = mysql_query("SELECT * FROM users WHERE email='$tmp_username' ");
	$numrows = mysql_num_rows($query);

	while($row = mysql_fetch_assoc($query))
	{
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$contact = $row['contact'];
		$country = $row['country'];	
	
	
	}
?>

<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="boy.png" class="avatar img-circle" alt="avatar">
          <h3><?php echo $first_name; ?></h3>
          
         
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>information</strong>. We will not share your Email-ID to any third party.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" method="POST" action ="user_change.php" >
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="newname" value="<?php echo $first_name  ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="newlast" value="<?php echo $last_name  ?>">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="newpassword">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label">Phone Number:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="newphone" value="<?php echo $contact; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Home Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="newcountry" value="<?php echo $country;  ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>


<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- JavaScript jQuery code from Bootply.com editor  -->



</body>
</html>

















<!--
<html>
<head>
<title>Edit Profile</title>
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
<?php /* include ("clone_user_session.php"); */?>
<h3>Edit Customer: <?php /*echo $tmp_username;*/ ?> </h3>

<form method="POST" action ="user_change.php">
<table id="n1" border="0" width="60%">

<tr><td width="30%">First Name: </td><td><input type="text" name="newname"> </td></tr>

<tr><td width="30%">Last Name: </td><td><input type="text" name="newlast"> </td></tr>

<tr><td width="30%">Password: </td><td><input type="password" name="newpassword"> </td></tr>

<tr><td width="30%">Phone Number: </td><td><input type="int" name="newphone"> </td></tr>

<tr><td width="30%"><label for="country"><b>Country:</b></label>
    <select id="newcountry" name="newcountry">
	<option value="Select your Country">Select Your Country</option>
      <option value="India">India</option>
      <option value="Australia">Australia</option>
      <option value="USA">USA</option>
	  <option value="South Africa">South Africa</option>
      <option value="Germany">Germany</option>
      <option value="China">China</option>
    </select><
    
<p>

<input type="submit" value="Save & Update" />

</form>


</table>
</body>
</html>

-->
