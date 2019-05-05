<html>
<head>
<title>
Car parking login or sign up
</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
#form .error {
    color: #FF007F;
    display: inline-block;
    margin: 0px 0 0px 0px;
    padding: 7px;
    text-align: left;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
	
	$("form[name='create']").validate({

    rules: {

      name: "required",
	  last: "required",
     
      email: {
        required: true,

        email: true
      },
      password: {
        required: true,
        minlength: 5
      },

      cpassword: {
        required: true,
        minlength: 5
      },

      contact: {
        required: true,
        minlength: 10 
      },

      country: "required",

    },

    messages: {
      name: "Please enter your First Name",last: "Please enter your Last Name",
      
      password: {
        required: "Please provide a valid password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address", contact: "Please enter your correct Mobile number"
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
</head>
<body>
<div class="div1">
<img class="im" src="p1.jpg" />
<p class="a">AUTOMATION OF PARKING BOOKING SYSTEM
</p>
<form id="2" method="post" action="user_login.php"  />

<p class="p2">
<label  for = "email">Email or username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<label for="password" > Password</label><br/>
<input class="i" type="text" placeholder="Username or Email" id="username" name="username" required />&nbsp;&nbsp;&nbsp;&nbsp;
<input class="i" type="password" placeholder="Password" name="password" required />
<br>

</p>
<div id="nav">
<ul>
<li><input type="submit" value="Log In" />
 </li>
 </div>
</form>

</div>


<div class="div3"> 
<div class="div4">
<h1 align="center">Welcome to book slot</h1>
<img  id="waah" src="car.jpg">
</div>

<div class="div5">
<p id="p4" align="center">Create an Account</p><hr>
<form ENCTYPE="multipart/form-data" method="post" action="user_insert.php" name ="create" id="form">

<p>

<div class="row">
<label for="name"><b>First Name:</b></label>
<input type="text" id="name" name="name" placeholder="First Name" >
</div>
<br />
<div class="row">
<label for="last"><b>Last Name:</b></label>
<input type="text" id="last" name="last" placeholder="Last Name" >
</div>
<br />
<div class="row">
<label for="email"><b>Email:</b></label>
<input type="text" id="email" placeholder="Email" name="email">
</div>
<br />
<div class="row">
<label for="password"><b>Password:</b></label>
<input type="password" id="password" placeholder="Password" name="password">
</div>
<br />
<div class="row">
<label for="cpassword"><b>Confirm Password:</b></label>
<input type="password" id="cpassword" placeholder="Confirm password" name="cpassword">
</div>
<div class="row">
<label for="phone"><b>Contact:</b></label>
<input type="tel" id="contact" name="contact" placeholder="Contact" >

</div>
</br>
<div class="row">
    <label for="country"><b>Country:</b></label>
    <select id="country" name="country">
	<option value="Select your Country">Select Your Country</option>
      <option value="India">India</option>
      <option value="Australia">Australia</option>
      <option value="USA">USA</option>
	  <option value="South Africa">South Africa</option>
      <option value="Germany">Germany</option>
      <option value="China">China</option>
    </select></div>
	
    
<br>
</div><br>


<div class="row">
<label for="Create the Account"></label>

<button type="Submit"  id="submit" value="Create An Account">Create Account</button>
</div><br>
<div class="row">
<label for="Reset"></label>
<input type="reset" id="reset" name="reset" value="Reset" />
</div>

</p>
</div>

</div>
</form>
</body>
</html>
