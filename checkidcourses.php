<?php
        session_start();
        if(isset($_POST))
{
    $_SESSION["id"] = $_POST['id'];    
}
?>