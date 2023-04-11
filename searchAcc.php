<?php 
    session_start();
    include_once 'dp.php';
    
        if(isset($_POST))
{  
    $mail = $_POST['Email'];
    $_SESSION["Email"] = $mail;
    $sql = "SELECT * FROM `user_table` WHERE Email ='$mail'";
        $result = $conn->query($sql);
       // var_dump($result);die;
       if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
              $name = $row["Name"];
                echo "Found an account named $name, isn't this yours?";
                $_SESSION["Name"] = $name;
              };
            }else {
                echo 'Email does not exist';
            };
} else {
    $mail = '';
}

    ?>