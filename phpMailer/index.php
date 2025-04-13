<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'PhpMailer/Exception.php';
require_once 'PhpMailer/PHPMailer.php';
require_once 'PhpMailer/SMTP.php';

$phpmailer  = new PHPMailer(true);

try {
    //Server settings
    // $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER;  //Enable verbose debug output
    $phpmailer->SMTPDebug = SMTP::DEBUG_OFF;  //Enable verbose debug output

    // Looking to send emails in production? Check out our Email API/SMTP product!
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'b865876b807ac9';
    $phpmailer->Password = '8ae6c5bb96b40b';                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $phpmailer->setFrom('Blog@blog.com', 'Blog Mail');
    $phpmailer->addAddress('ahmed@gmail.com', 'Ahmed Alfawakhry');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $phpmailer->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $phpmailer->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $phpmailer->isHTML(true);                                  //Set email format to HTML
    $phpmailer->Subject = 'About Password Reset';
    $phpmailer->Body    = 'Hello Ahmed!</b>';
    $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $phpmailer->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}
