<?php
session_start();
require "sendmail.php";
if(isset($_POST))
{  
    $mail = $_POST['Email'];
     $random=substr(str_shuffle(str_repeat('0123456789', mt_rand(1,6))), 1, 6);
     date_default_timezone_set('Asia/Ho_Chi_Minh');
     $time = date("Y-m-d h:i:s");
    $_SESSION["Email"] = $mail;
    $_SESSION["Random"] = $random;
    $_SESSION["Time"] = $time;
    $MailSubject = "Email Verification";
    $MailBody = "Your new confirmation code is: " . $random . " .The code has an expiry date of 60 seconds";
    SendMail($mail, $MailSubject, $MailBody);
}
?>