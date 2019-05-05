
<?php
include 'dbh1.php';

$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$contact = $_POST['contact'];
$country = $_POST['country'];


//$f=0;
//$conn=mysql_connect("localhost","root","","parking") ;
//if(!$conn)
//{
//	die("connection failed:".mysql_connect_error());
//}
//mysql_select_db("parking");




$query = "SELECT * FROM users";
$res = mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
	$user_email=$row['email'];
	if($email==$user_email)
	{
		
		echo "This Email has already taken<br />
		Please enter another valid Email<br />";
		$f=1;
	}
}

if ($name && $last && $password && $cpassword && $email && $contact && $country && $f==0) {

if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {

	if(preg_match("/^[0-9]{10}$/", $contact)){
		
		if (strlen($password) > 5) {

			if ($password == $cpassword) {

           // mysqli_connect("localhost", "root", "","parking") or die("We couldn't connect!");
           /* mysql_select_db("parking");*/

            $username = "SELECT contact FROM users WHERE contact=$contact";
            $res1 = mysqli_query($conn,$username);
            $count = mysqli_num_rows($res1);
            $remail = "SELECT email FROM users WHERE email='$email'";
            $res2 = mysqli_query($conn,$remail);
            $checkemail = mysqli_num_rows($res2);

            if ($checkemail != 0) {

                echo "This email is already registered! Please type another email...";
            } else {


                if ($count != 0) {

                    echo "This phone number is already registered! Please type another number";
                } else {
					
					
					
						$passwordmd5 = md5($password);
						$sql1="INSERT INTO users(first_name,last_name,email,password,contact,country) VALUES('$name','$last','$email','$passwordmd5','$contact','$country')";
						$result=$conn->query($sql1);
						/*mysql_query("INSERT INTO
						 pin_city(pincode,city) VALUES('$pincode','$city')");
						mysql_query("INSERT INTO pin_state(pincode,state) VALUES('$pincode','$state')");
						mysql_query("INSERT INTO customer_pin(pincode) VALUES('$pincode')");
						mysql_query("INSERT INTO nominee(name,phone_number,dob,sex,relation) VALUES('$nomi_name',$nphone,'$ndob','$nsex','$nrelation')");
						mysql_query("INSERT INTO bank_details(bank_name,account_number) VALUES('$bankname','$accountnum')");
						mysql_query("INSERT INTO customer_account(account_number) VALUES('$accountnum')");*/
						
						//mysqli_close();
						echo "You have succefully registered!<a href='project.php'>Login now!</a>";
					
					
					
					}
                }
            }
			else {
            echo "Your passwords don't match!";
			}
    } else {

        echo "Your password is too short! You need to type a password between 4 and 15 charachters!";
    }
	
	}else
	{
		echo "Please type a valid phone number!";
	}	
	
	}else{
			echo "Please type a valid email!";
	}
} else {
    echo "you have to complete the form!";
}	


//include("cust_reg_link.php");

?>