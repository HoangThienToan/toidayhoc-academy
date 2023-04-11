<?php
session_start();
include_once 'dp.php';
    
    require './vendor/autoload.php';
    use Aws\S3\S3Client;
    use Aws\S3\Exception\S3Exception;

    $bucket = 'labtoidayhoc';
    $keyname = 'AKIAVJH5OBNALLPJXXNB';
    $s3secret = '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';
    $region = 'ap-southeast-1';

    $s3 = new S3Client([
        'version' => 'latest',
        'region'  => $region,
        'credentials' => [
            'key'    => $keyname,
            'secret' => $s3secret,
        ],
    ]);
if(isset($_POST))
{   
    $title = $_POST['title'];
    $sumary = $_POST['sumary'];
    $price = $_POST['price'];
    
    if(!!$_FILES) {
        $files = $_FILES["File"];
        $name = $files['name'][0];
        $type = $files['type'];
        $tmp_name  = $files['tmp_name'][0];
        // var_dump($tmp_name);die;
        $random=substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,10))), 1, 10);
        $target_file   = "toanht/image/" .$random. $name;
        $filepath = $tmp_name;
        try {
            $result = $s3->putObject(array(
            'Bucket'       => $bucket,
            'Key'          => $target_file,
            'SourceFile'   => $filepath,
            'ContentType'  => 'text/plain',
            'ACL'          => 'public-read',
        ));
        $target_file = htmlspecialchars($result->get('ObjectURL'));
        $success = "upload img success";
    }catch (S3Exception  $e) {
        echo $e->getMessage();
    }
    }
    $cre = new create();
    $query = "INSERT INTO courses (thumb,title,sumary,price)
    VALUES ('$target_file','$title','$sumary', '$price')";
    $result = $cre->execute($query);
    if(!!$result){
        echo 'alright';
    } else {
        echo 'error';
    }
}

?>