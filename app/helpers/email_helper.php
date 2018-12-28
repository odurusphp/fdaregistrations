<?php
/**
 * Created by PhpStorm.
 * User: cassie
 * Date: 5/3/18
 * Time: 4:14 PM
 */
    function sendEmail($senderemail, $receiveremail, $subject, $message, $customer, $atttach=true)
    {
        $error = 'Error';
        $success = 'Success';

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->IsSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Host       = "smtp.mailgun.org";
        $mail->Port       = 587;
        $mail->Username   = USERNAME;
        $mail->Password   = PASSWORD;

        $mail->From = $senderemail;
        $mail->FromName = $customer;
        $mail->Sender = $senderemail;

        $mail->AddAddress($receiveremail);
        $mail->Subject = $subject;

        $mail->IsHTML(true);
        $mail->Body = $message;

        if ($atttach == true){
            $mail->addAttachment(APPROOT.'/uploads/menteeRegistration.xlsx');
        }

        if (!$mail->Send()) {
            return $mail->ErrorInfo;
        } else {
            return $success;
        }


    }
