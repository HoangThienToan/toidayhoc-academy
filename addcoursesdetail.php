<?php
session_start();
include_once("dp.php");
var_dump($_POST);
if(isset($_POST))
{   
    $id = $_SESSION["id"];
    $stt = $_POST['stt'];
    $content = $_POST['content'];
    $link = $_POST['link'];
    $exercise = $_POST['exercise'];
    $get = new take();
    $query = "SELECT * FROM courses_detail WHERE coursesid = '$id' and stt = '$stt'";
    $result = $get->getData($query);
    if (!$result) {
      $cre = new create();
      $query = "INSERT INTO courses_detail (coursesid,stt,content,link,ex)
      VALUES ('$id','$stt','$content','$link', '$exercise')";
      $result = $cre->execute($query);
      }else {
         echo "Lesson order already exists";
    }
}
?>