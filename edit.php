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
include 'dbh1.php';
//mysql_connect("localhost", "root", "") or die("We couldn't connect!");
//	mysql_select_db("parking");
	
	$query = "SELECT * FROM users WHERE email='$tmp_username' ";
  $res = mysqli_query($conn,$query);
	$numrows = mysqli_num_rows($res);

	while($row = mysqli_fetch_assoc($res))
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

</body>
</html>