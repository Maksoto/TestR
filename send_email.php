<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$body = $name . ' ' . $email . ' ' . $subject . ' ' . $message;
$theme = "[Заявка с кафе]";

$mail->addAddres("maxsostar888@gmail.com");

$mail->Subject = $theme;
$mail->Body = $body;

$mail->send();
?>
