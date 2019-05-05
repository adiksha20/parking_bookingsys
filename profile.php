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
include ("clone_user_session.php");

echo $tmp_username;
include("user_link.php");
include 'dbh1.php';
//mysql_connect("localhost", "root", "") or die("We couldn't connect!");
	//mysql_select_db("parking");
	
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

<br />
<br />

           <a href="edit.php" ><center>Edit Profile</a> 
		   <!--<a href="logout.php" ><object align = "right" \> Logout</object></a>-->
       <br>

      </div>
        
   
   
         
            
              <h3><?php echo $first_name; echo " "; echo $last_name;     ?></h3>
            
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="boy.png" > </div>
                
               
                
                  <table>
                    <tbody>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $tmp_username;  ?></td>
                      </tr>
                      <br>
                   
                         <tr>
                             <tr>
                        <td>Gender:      </td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address:    </td>
                        <td><?php echo $country;  ?></td>
                      </tr>
						<tr>
                        <td>Phone Number</td>
                        <td><br><?php echo $contact;?>(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>

</body>
</head>
</html>