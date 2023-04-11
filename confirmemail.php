<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <body class="container d-flex justify-content-center" style='background-color: #e9ebee;height: 400px;'>
            <div class="card mt-5 rounded " style="width: 300px;">
                <div class="card-header font-weight-bold">
                    Enter the identification code from the email
                </div>
                <div class='card-body'>
                    <div class="form-group">
                        <input type="hidden" id="email" value="<?php echo $mail; ?>">
                        <label for="name">To make sure this is your email, enter the code we sent via email at <?php echo $mail; ?>.</label>
                        <input type="text" class="form-control" id="code" placeholder="trống">
                        <div id="message" ></div>
                        <a class="" type= "button" id="Resend">Resend confirmation code</a>
                    </div>
                </div>
                <div class="p-3">
                        <button class="btn btn-primary submit" id="Confirm" name="Confirm">Confirm</button>
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="./js/main.js"></script>
        <script src="./menu-mobile/main.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script>
        $(document).ready(function() {
            $('#code').change(function() {
                $('#message').html('')
                a()
            })
            function a(){
                if ($('#message').html() == ''){
                    $('#message').prop("class", "");
                } else {
                    $('#message').prop("class", "text-danger");
                }
            }
            a()
            $('#Resend').click(function() {
                var email = $("#email").val();
                let Form = new FormData();
                    Form.append("Email", email);
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
                        }
                    });
            })
            $('#Confirm').click(function(){
                var code = $("#code").val();
                let Form = new FormData();
                    Form.append("Code", code);
                    Form.append("Password", null);
                    $.ajax({
                        type: "POST",
                        url: 'confirm.php',
                        dataType: "text",
                        async: false,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        data: Form,
                        success: function(data) {
                            console.log(data)
                            // window.location.replace("confirmemail.php");
                            $('#message').html(data)
                            a()
                        }
                    });
            })
        })
        </script>
    </body>

</html>