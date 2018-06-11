<?php
use PHPMailer\PHPMailer\PHPMailer;
date_default_timezone_set('Etc/UTC');
require '../vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'mail.priyankathakur.in';
$mail->Port = 25;
$mail->setFrom('info@priyankathakur.in', 'First Last');
$mail->addAddress('priyanka.thakur153@gmail.com', 'John Doe');
$mail->Subject = 'Message';
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
