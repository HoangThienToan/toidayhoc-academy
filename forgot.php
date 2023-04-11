<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
        <title>Document</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1330f21d64.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css./style.css">

    </head>
    <?php 
        session_start();
        if  (!$_SESSION) {
            echo "session expired, please return to the login page: <a href='http://localhost/login/login.php'> http://localhost/login/login.php<a> .";die;
    } else {
        $mail = $_SESSION["Email"];
    }
    ?>
    <body class="container d-flex justify-content-center flex-column align-items-center" style='background-color: #e9ebee;height: 400px;text-align: center;'>
        <div class="card mt-5 rounded " style="width: 300px;">
                <div class="card-header font-weight-bold">
                    Find your account
                </div>
                <div class='p-2'>
                    <div class="form-group">
                        <div class='pb-1'>
                            Please enter your email to search for your account.
                        </div>
                        <div class="form-group keep pb-2 header1">
                            <input type="text" class="form-control" id="Email" placeholder="trống" value='<?php echo $mail; ?>'>
                            <span id="reminderEmail"></span>
                            <a type="button" id="myEmail"></a >
                        </div>
                    </div>
                </div>
                <div class="card-header d-flex">
                        <a href='login.php' class="btn submit m-1" style='background: #999eab;' id="Cancel">Cancel</a>
                        <button class="btn btn-primary submit m-1" id="Search">Search</button>
                </div>
                <div class="p-3">
                        <button href='login.php' class='btn btn-primary' id=''>Back to login</button>
                </div>
            </div>
        
        <?php 
?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="./js/main.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script>
        $(document).ready(function() {
            $("#Search").click(function() {
                var Email = $('#Email').val();
                let Form = new FormData();
                    Form.append("Email", Email);
                    $.ajax({
                        type: "POST",
                        url: 'searchAcc.php',
                        dataType: "text",
                        async: false,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        data: Form,
                        success: function(data) {
                            if (data == "Email does not exist") {
                                $("#reminderEmail").html(data);
                                $("#reminderEmail").prop("class", "text-danger");
                             }   else {
                                $("#reminderEmail").html(data);
                                $("#myEmail").html("It's my account!");
                                $("#reminderEmail").prop("class", "text-success");
                                $("#myEmail").prop("class", "text-primary");
                                $("#myEmail").click(function() {
                                    $.ajax({
                                        type: "POST",
                                        url: 'verification.php',
                                        dataType: "text",
                                        async: false,
                                        enctype: 'multipart/form-data',
                                        processData: false,
                                        contentType: false,
                                        data: Form,
                                        success: function(data) {
                                            window.location.replace("passwordReset.php");
                                        }
                                    });
                                });
                                
                            }
                        }
                    });
            });
            

        });
        </script>

    </body>

</html>