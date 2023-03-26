<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master\PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\PHPMailer-master\src\SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'maxsostar888@gmail.com';                     
    $mail->Password   = 'Maksotoscpsl1fff';                             
    $mail->SMTPSecure = 'tls';         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom($_POST["email"], $_POST["name"]);
    $mail->addAddress('maxsostar888@gmail.com');

    // Content
    $mail->isHTML(false);                                  
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["message"];

    $mail->send();
    echo "Your message has been sent.";
  } catch (Exception $e) {
    echo "There was a problem sending your message. Error: {$mail->ErrorInfo}";
  }
}
?>
