<?php
require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class SendMail {
public function SendMail($MailTo, $MailSubject, $MailBody)
{
    $MailTo =  $MailTo;
    $MailSubject = $MailSubject;
    $MailBody = $MailBody;

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'toanthien978@gmail.com';                     //SMTP username
        $mail->Password   = 'yzvobzdtqyxgqsnm';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('toanthien978@gmail.com', 'Smtp gmail');
        $mail->addAddress($MailTo);     //Add a recipient
                   
        // $mail->addReplyTo('info@example.com', 'Information');
       

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $MailSubject;
        $mail->Body    = $MailBody;
        $mail->AltBody = '';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
}


    //   $MailSubject = "Email Verification";
    //   $MailBody = "Welcome account: " . $name . " registered successfully. Your email confirmation code is: " . $random . " .The code has an expiry date of 60 seconds, or click on the link: http://localhost/login/forgot_pass.php?Token=".$token."";
    //   $Senmail = new SendMail();
    //   $Senmail->SendMail($mail, $MailSubject, $MailBody);

?>