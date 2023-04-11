<?php
session_start();
include_once("dp.php");
include_once ("sendmail.php");
if(isset($_POST))
{  
    $name = $_POST['Name'];
    $mail = $_POST['Mail'];
    $password = $_POST['Password'];
    $get = new take();
      $query = "SELECT * FROM account WHERE Email = '$mail'";
      $result = $get->getData($query);
      if (!$result) {
         $random=substr(str_shuffle(str_repeat('0123456789', mt_rand(1,6))), 1, 6);
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $time = date("Y-m-d h:i:s");
      $token = bin2hex(openssl_random_pseudo_bytes(16));
      $cre = new create();
      $query = "INSERT INTO account (Name,Email,Phone,Password,confirm,dateAndTime,Token)
      VALUES ('$name','$mail',null,'$password', 0,'$time', '$token')";
      $result = $cre->execute($query);
      if($result){
         $_SESSION["Name"] = $name;
         $_SESSION["Email"] = $mail;
         $_SESSION["Password"] = $password;
         $_SESSION["Random"] = $random;
         $_SESSION["Time"] = $time;
      } else {
        echo "Error";
      }
      $MailSubject = "Email Verification";
      $MailBody = "Welcome account: " . $name . " registered successfully. Your email confirmation code is: " . $random . " .The code has an expiry date of 60 seconds, or click on the link: http://localhost/login/forgot_pass.php?Token=".$token."";
      $Senmail = new SendMail();
      $Senmail->SendMail($mail, $MailSubject, $MailBody);
      }else {
         echo "Email already exists";
    }
}
?>