<?php
//require 'C:\xampp\htdocs\PHPMailer-master\PHPMailer-master\PHPMailerAutoload.php';
require 'PHPMailer-master/PHPMailerAutoload.php';
$subject=$_REQUEST['subject'];
$feedback=$_REQUEST['feedback'];
$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'vitcar.parking@gmail.com';          // SMTP username
$mail->Password = 'carparking'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->From ='vitcar.parking@gmail.com';
$mail->FromName = 'Online Parking Spot Reservation';
//$mail->addReplyTo('info@codexworld.com', 'CodexWorld');
$mail->addAddress('chachan.aayush529@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = $feedback;

$mail->Subject = $subject;
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<br><br><br><br><br><br><center>Feedback has been successfully mailed to our IT HEAD<br> Thankyou for your valuable suggestion</center>';
	header("Refresh:5; url=user_users.php");	
}
?>