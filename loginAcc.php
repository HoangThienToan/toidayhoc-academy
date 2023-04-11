<?php 
        session_start();
        include_once 'dp.php';
        include_once "sendmail.php";
        $password = $_POST["Password"];
        $mail = $_POST["Email"];
        $get = new take();
       $query = "SELECT * FROM account where Email = '$mail'";
       $result = $get->getData($query);
       if ($result) {
              $p = $result[0]["Password"];
              $id = $result[0]["id"];
              $name = $result[0]["Name"];
              $confirm = $result[0]["confirm"];
              if ($password == $p) {
                     $_SESSION["Email"] = $mail;
                     $_SESSION["Password"] = $password;
                     $_SESSION["Name"] = $name;
                     if ($confirm == 0) {
                            $random=substr(str_shuffle(str_repeat('0123456789', mt_rand(1,6))), 1, 6);
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $time = date("Y-m-d h:i:s");
                            $_SESSION["Random"] = $random;
                            $_SESSION["Time"] = $time;
                            $token = bin2hex(openssl_random_pseudo_bytes(16));
                            $upd = new update();
                            $query = "UPDATE account 
                            SET Token='$token'
                            WHERE id='$id'";
                            $result = $upd->update($query);
                            $MailBody = "Your new confirmation code is: " . $random . " .The code has an expiry date of 60 seconds, or click on the link: http://localhost/login/forgot_pass.php?Token=".$token."";
                            $Senmail = new SendMail();
                            $MailSubject = "Email Verification";
                            $Senmail->SendMail($mail, $MailSubject, $MailBody);
                            echo "Unconfimred";
                     } else{
                            echo "Valid";
                     }
              } else {
                     echo "wrong password!";
              };
       } else {
              echo "The email entered does not belong to any account!";
       };
    ?>