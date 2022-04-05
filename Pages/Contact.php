<?php

namespace Pages;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Contact extends Page{
    
    public function index() {
        
        $this->load('views/frontend/contact/index.php');

    }
    public function send(){
        $name=isset($_POST['name'])?$_POST['name']:'';
        $email=isset($_POST['email'])?$_POST['email']:'';
        $subject=isset($_POST['subject'])?$_POST['subject']:'';
        $message=isset($_POST['message'])?$_POST['message']:'';
        try {

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'beb8fc458866a1';
        $mail->Password = '2301af47af8ab4';

        $mail->setFrom($email);
        $mail->addAddress('giocackri1@gmail.com');     //Add a recipient
        $mail->addReplyTo($email);

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = '<div>'.$message.'</div>';
        $mail->send();
        $status = 1;

    } catch(Exception $e) {
        $status = 0;
    }
    header('Location: ?page=contact&status='.$status);
    }
}