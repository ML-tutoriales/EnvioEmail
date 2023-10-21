<?php

require_once './mail.controller.php';
require '../libMail/vendor/autoload.php';

if (isset($_POST['subject'], $_POST['email'], $_POST['message'])) {
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $resp = MailController::enviarEmail($subject, $email, $message);
    echo $resp;
}

