<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "\autoload.php"

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host= "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port= 587;

$mail->Username = "g.e.dekoninggans@gmail.com";
$mail->Password= "stage88.";

$mail->setFrom($email, $name);
$mail->addAddress("g.e.dekoninggans@gmail.com");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "emailt sent";