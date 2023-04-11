<?php 
    include_once 'dp.php';
    if(isset($_POST))
       {
        
        $eval = $_POST['eval'];
        $content = $_POST["content"];
        $link = $_POST["link"];
        $ex = $_POST['ex'];
        $lesson = $_POST['lesson'];
        // var_dump(!$content);die;
        $upd = new update();
        if (!!$content) {
                $query = "UPDATE courses_detail
                SET content='$content'
                WHERE id='$eval'";
                $result = $upd->update($query);
        };
        if (!!$link) {
                $query = "UPDATE courses_detail
                SET link='$link'
                WHERE id='$eval'";
                $result = $upd->update($query);
        };
        if (!!$ex) {
                $query = "UPDATE courses_detail
                SET ex='$ex'
                WHERE id='$eval'";
                $result = $upd->update($query);
        };
        if (!!$lesson) {
                $query = "UPDATE courses_detail
                SET stt='$lesson'
                WHERE id='$eval'";
                $result = $upd->update($query);
        };
    }
    ?>