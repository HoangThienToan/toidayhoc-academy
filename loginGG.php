<?php
session_start();
include_once 'dp.php';
if(isset($_POST))
{  
    $name = $_POST['Name'];
    $mail = $_POST['Email'];
    $phone = $_POST['Phone'];
    $uid = $_POST['uid'];
    $get = new take();
   $query = "SELECT * FROM account where uid='$uid'";
   $result = $get->getData($query);
//    var_dump($result[0]['permis']);die;
      if (!!$result) {
      echo "Acc already exists";
        $_SESSION["uid"] = $uid;
        $_SESSION["Name"] = $name;
        $_SESSION["Email"] = $mail;
        $_SESSION["Phone"] = $phone;
        $_SESSION["permis"] = $result[0]['permis'];
        $_SESSION["idacc"] = $result[0]['id'];
      }else {
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $time = date("Y-m-d h:i:s");
      $cre = new create();
      if ($phone == 'null'){
        if ($mail == 'null') {
          $query = "INSERT INTO account (uid,Name,Email,Phone,confirm,dateAndTime,permis)
            VALUES ('$uid','$name',null,null, 1,'$time', 1)";
      } else  {
        $query = "INSERT INTO account (uid,Name,Email,Phone,confirm,dateAndTime,permis)
            VALUES ('$uid','$name','$mail',null, 1,'$time', 1)";
      }       
    } else {
      $query = "INSERT INTO account (uid,Name,Email,Phone,confirm,dateAndTime,permis)
     VALUES ('$uid',null,null,'$phone', 1,'$time', 1)";
     echo "$phone";
    }
    if ($result = $cre->execute($query)) {
        //  header('Location: confimemail.php'); exit;
        $_SESSION["Name"] = $name;
        $_SESSION["Email"] = $mail;
        $_SESSION["Phone"] = $phone;
        $_SESSION["permis"] = 1;
        $_SESSION["uid"] = $uid;





      
     }
}
    

}
?>