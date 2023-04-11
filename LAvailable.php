<?php
session_start();
include_once 'dp.php';
if(isset($_POST))
{ 
$permis = $_SESSION["permis"];
$idAcc = $_SESSION["idacc"];
$id = $_POST['id'];
$get = new take();
$query = "SELECT  *
From courses_detail 
where coursesid='$id' order by stt";
$resultC = $get->getData($query);
if (!!$resultC) {
    $get = new take();
    $query = "SELECT  *
    From register
    join account on account.id = register.accountid
    where account.id='$idAcc'";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time = date("Y-m-d h:i:s");
    $result = $get->getData($query);
    // var_dump($idAcc);die;
    //Sau khi thêm chức năng đăng kí xóa ở đây
    if(!$result) {
        $cre = new create();
        $query = "INSERT INTO register (coursesid,accountid)
            VALUES ('$id','$idAcc')";
        $result = $cre->execute($query);
    }else {
        $sTime   = $result[0]['start_time']; 
        if (!$sTime){
        $upd = new update();
        $query = "UPDATE register
        SET start_time='$time'
        WHERE accountid='$idAcc' and coursesid='$id'";
        $result = $upd->update($query);
        $sTime = $time;
    }
    }
    
    // $time = "2023-04-17 10:02:32";
    $i = 0;
    $E = 259200;
    $C = 259200;
    $d = 0;
    // var_dump((strtotime($time) - strtotime($sTime)));die;
    while ($E <= (strtotime($time) - strtotime($sTime))) {
        $E = $E + $C;
        $d++;
    };
    while ($i <= $d) {
        if($i < count($resultC)){
            if($i == $d) {
                $tr = 'show';
            } else {
                $tr = '';
            }
            
            $row = $resultC[$i];    
            $id = $row["id"];
            
            $coursesid = $row["coursesid"];
            $stt = $row["stt"];
            $content = $row["content"];
            $link = $row["link"];
            $ex = $row["ex"];
            if ($permis == 2) {
                echo '<div class="course-details pb-1">
                                <div class="border rounded-top fw-bolder p-3 d-flex justify-content-between">
                                    <h2 class=" ps-5 fs-3 mb-0">Session '.$stt.'</h2>
                                    <a class="" data-bs-toggle="collapse" href="#collapseExample'.$stt.'" role="button" 
                                    aria-expanded="false" aria-controls="collapseExample"><svg xmlns="http://www.w3.org/2000/svg" width="30" color="cornflowerblue"
                                                            height="30" fill="currentColor" class="bi bi-caret-down-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                        </svg></a>
                                </div>
                                <div class="collapse '.$tr.'" id="collapseExample'.$stt.'">
                                    <div class="d-flex  border p-3 flex-wrap">
                                        <h3 class="fs-4 mb-0">Lesson content: </h3>
                                        <p class="mb-0 ps-2" style=" line-height: 32px">'.$content.'</p>
                                    </div>
                                    <div class="d-flex border p-3 flex-wrap">
                                        <h3 class="fs-4">Video of the lesson: </h3>
                                        <div class="">
                                            '.$link.'
                                        </div>
                                    </div>
                                    <div class="border rounded-bottom p-3 flex-wrap">
                                        <div class="">
                                            <label for="exampleFormControlTextarea1" class="form-label">Exercise: </label>
                                            <textarea class="form-control" placeholder="emty" rows="3" disabled>'.$ex.'</textarea>
                                        </div>
                                        <div class="pt-2" id="zip_send">
                                            <button class="btn btn-primary change">Change</button>
                                            <input type="hidden" value='.$id.'>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
        ';
            } else {
                echo '<div class="course-details pb-1">
                                <div class="border rounded-top fw-bolder p-3 d-flex justify-content-between">
                                    <h2 class=" ps-5 fs-3 mb-0">Session '.$stt.'</h2>
                                    <a class="" data-bs-toggle="collapse" href="#collapseExample'.$stt.'" role="button" 
                                    aria-expanded="false" aria-controls="collapseExample"><svg xmlns="http://www.w3.org/2000/svg" width="30" color="cornflowerblue"
                                                            height="30" fill="currentColor" class="bi bi-caret-down-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                        </svg></a>
                                </div>
                                <div class="collapse '.$tr.'" id="collapseExample'.$stt.'">
                                    <div class="d-flex  border p-3 flex-wrap">
                                        <h3 class="fs-4 mb-0">Lesson content: </h3>
                                        <p class="mb-0 ps-2" style=" line-height: 32px">'.$content.'</p>
                                    </div>
                                    <div class="d-flex border p-3 flex-wrap">
                                        <h3 class="fs-4">Video of the lesson: </h3>
                                        <div class="">
                                            '.$link.'
                                        </div>
                                    </div>
                                    <div class="border p-3 flex-wrap">
                                            <label for="exampleFormControlTextarea1" class="form-label">Exercise: </label>
                                            <textarea class="form-control" placeholder="emty" rows="3" disabled>'.$ex.'</textarea>
                                    </div>
                                    <div class="d-flex border rounded-bottom p-3 flex-wrap">
                                        <p class="w-100">*Please compress to fire zip before send</p>
                                        <div class="">
                                            <label type="button" for="formFile" class="btn btn-primary">Add fire
                                            <input accept=".zip" class="d-lg-none" type="file" id="formFile">
                                        </label>
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <img class="d-lg-none" width="100" id="blah" src="./img/zipfire.jpg" alt="your fire" />
                                                <span id="zip_title"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-1 flex-wrap w-100">
                                            <label for="exampleFormControlTextarea1" class="form-label">Note: </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="pt-2" id="zip_send">
                                            <input type="hidden" value='.$id.'>
                                            <button class="btn btn-primary ">Send</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
        ';
            };
        
        }
        $i++;
    
  }
 
  echo '</table>';
} else {
  echo "0 results";
  
}
}



?>

<script>
//edit
$(document).ready(function() {
    //modal del
    var modalE = $('#modalE');

    $('.closeE').click(function() {
        modalE.hide();
    });
    $('.change').click(function() {
        $('#Eval').val($(this).siblings().val());
        modalE.show();
        $("#content").val("");
        $("#ex").val("");
        $("#link").html("");
    })
});
</script>