<?php
include("user_booking_detail.php");
//echo $tmp_username;
//require 'C:\xampp\htdocs\PHPMailer-master\PHPMailer-master\PHPMailerAutoload.php';
require 'PHPMailer-master/PHPMailerAutoload.php';


$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com';       // Specify main and backup SMTP servers
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


$mail->Subject = 'Confirmation email';
$mail->Body    = '<b><h2><center> Venue: ';
$mail->Body    .= $tmp_building;
$mail->Body    .= '<br>';
$mail->Body    .= '<b><h2<center> Day: ';
$mail->Body    .= $tmp_day;
$mail->Body    .= '<br>';
$mail->Body    .= '<b><h2<center> Slot: ';
$mail->Body    .= $tmp_slot;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<br><br><br><br><br><br><center>Thank you for booking</center>';
	header("Refresh:5; url=user_users.php");	
}
?>