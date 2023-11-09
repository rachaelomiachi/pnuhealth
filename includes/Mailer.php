<?php
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader


class Mailer
{
    public function __constructor($to, $subject, $message)
    {
        $mail = new PHPMailer(true);
        var_export($mail);
        //Server settings
        $mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'localhost'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = false; // Enable SMTP authentication
        $mail->SMTPSecure = ''; // Enable SSL encryption, TLS also accepted with port 465
        $mail->Port = 25;   

        $from = "pnuhealthhospital@gmail.com";
        $mail->setFrom($from, 'Webmaster');

        // Add a recipient
        $mail->addAddress($to);
        // Set the email subject
        $mail->Subject = $subject;
        // Set the email body
        $mail->Body = $message;
        // Set the email format to HTML
        $mail->isHTML(true);
        
        // Send the email
        if(!$mail->send()) {

            echo 'Message could not be sent.';
            return 'Mail Error: ' . $mail->ErrorInfo;
        } else {
        return 'Message has been sent.';
        }

    }
}


