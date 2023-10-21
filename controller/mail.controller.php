<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController {
    
    static public function enviarEmail($subject, $email, $message) {
        date_default_timezone_set("America/Bogota");
        $mail = new PHPMailer;
        $mail->CharSet = 'utf-8';
        $mail->isMail();
        $mail->UseSendmailOptions = 0;
        $mail->setFrom("noreply@tudominio.com", "Diego");
        $mail->Subject = $subject;
        $mail->addAddress($email);
        $mail->msgHTML($message);
        $send = $mail->send();
        
        if(!$send){
            return $mail->ErrorInfo;
        }else{
            return "ok";
        } 
        
    }
}
