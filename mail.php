<?php

require("phpMailer/class.phpmailer.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

echo $name;
echo $email;
echo $message;

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.priyankathakur.in";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@priyankathakur.in";  // SMTP username
$mail->Password = "pS@myal851"; // SMTP password

$mail->From = "info@priyankathakur.in";
$mail->FromName = "Priyanka Thakur";
$mail->AddAddress("thecorporator@gmail.com", "Mayank");
$mail->AddAddress("priyanka.thakur153@gmail.com", "Priyanka");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "New Message Received";
$mail->Body    = $message."<br><br> Regards, <br> <b> Priyanka Thakur </b>";

 if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

 // some action goes here under php


return "Message has been sent";

?>