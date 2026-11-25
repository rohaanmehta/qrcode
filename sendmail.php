<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {

  // SMTP configuration
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'ronymehta321@gmail.com';
  $mail->Password   = 'ylxk bxmt qqoc axoo';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;

  // Email details
  $mail->setFrom('ronymehta321@gmail.com', 'Rony');
  $mail->addAddress('ronymehta321@gmail.com');

  $mail->Subject = 'Github QR Code Generator';
  $mail->Body    = 'A person has downloaded the QR code!';

  // Send
  $mail->send();

  echo 'Your mail has been sent successfully.';
} catch (Exception $e) {

  echo 'Unable to send email. ' . $mail->ErrorInfo;
}
?>
