<?php 
        session_start();
        include_once 'dp.php';
        $name = $_SESSION["Name"];
        $mail = $_SESSION["Email"];
       if(!$_POST['Password'] == null)
       {  
              $_SESSION["Password"] = $_POST['Password'];
       }
        $password = $_SESSION["Password"];
        $random = $_SESSION["Random"];
        $timeold = $_SESSION["Time"];
        $code = $_POST['Code'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = date("Y-m-d h:i:s");
        if (($code == $random)&&((strtotime($time) - strtotime($timeold)) < 60)){ // 60 refers to 60 seconds
             $upd = new update();
              $query = "UPDATE account
               SET confirm='1',Password='$password'
               WHERE Email='$mail'";
              $result = $upd->update($query);
               if ($result) {
                header('Location: index.php'); exit;
               }
        }else {
               echo  "Please enter a valid code"; 
               };
        mysqli_close($conn);
    ?>