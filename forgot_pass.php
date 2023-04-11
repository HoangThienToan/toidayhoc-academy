<?php

include 'dp.php';

$Token = $_GET['Token'];

$sql_token = "SELECT * FROM account WHERE Token = '$Token'";
$result_token = mysqli_query($conn, $sql_token);
$row_token = mysqli_fetch_array($result_token);
if (!$row_token) {
    echo "Mischievous boy, come back: <a href='sigin.php'> http://localhost/lzd/lazada_demo/login.php<a> .";die;
}
$email = $row_token["Email"];
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = date("Y-m-d h:i:s");
if (strtotime($time) - strtotime($row_token["dateAndTime"]) < 200){ // 200 refers to 60 seconds
             $sql = "UPDATE account 
               SET confirm='1', Token=null
               WHERE Email='$email'";
               if (mysqli_query($conn, $sql)) {
                    header('location:index.php');
               } else {
               echo "Error: " . $sql . ":-" . mysqli_error($conn);
               }  
        } else{
            echo "session expired, please return to the login page: <a href='confirmemail.php'> http://localhost/login/confirmemail.php<a> .";die;
        }
$_SESSION["Name"] = $row_token["Name"];
$_SESSION["Email"] = $email;
$_SESSION["Password"] = $row_token["Password"];
?>