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
        $mail = $_SESSION["Email"];
    ?>

    <body class="container d-flex justify-content-center" style='background-color: #e9ebee;height: 510px;'>
            <div class="card mt-5 rounded " style="width: 300px;">
                <div class="card-header font-weight-bold">
                    Enter your new password
                </div>
                <div class='card-body'>
                    <div class="form-group">
                        <input type="hidden" id="email" value="<?php echo $mail; ?>">
                        <label for="name">Please check the code in your email. This code consists of 6 numbers. We have sent you the code to <?php echo $mail; ?>.</label>
                        <input type="text" class="form-control" id="code" placeholder="trống">
                        <div id="message" ></div>
                        <a class="" type= "button" id="Resend">Resend confirmation code</a>
                    </div>
                    <div class="d-flex flex-nowrap">
                                    <div class="form-group keep pb-2 header1 w-50">
                                        <label for="create">New password</label>
                                        <input type="password" class="form-control" id="create" placeholder="trống" required>
                                        <span class="show-btn"><i class="fa-solid fa-eye"></i></span>
                                        <span id="reminderCreate"></span>
                                    </div>
                                    <div class="form-group keep pb-2 header1 w-50 px-1">
                                        <label for="retry">Retry password</label>
                                        <input type="password" class="form-control" id="retry" placeholder="trống" required>
                                        <span class="show-btn"><i class="fas fa-eye hide-btn"></i></span>
                                        <span id="reminderRetry"></span>
                                    </div>
                                </div>
                </div>
                
                <div class="p-3">
                        <button class="btn btn-primary submit" id="Confirm" name="Confirm">Confirm</button>
                </div>
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
            $(".show-btn").click(function() {
                var passField = $(this).siblings("input");
                if(passField.attr('type') === "password"){
                passField.prop("type", "text");
                $(this).children().prop("class", "fa-solid fa-eye-slash");
                }else{
                passField.prop("type", "password");
                $(this).children().prop("class", "fa-solid fa-eye");
                }
            });
            $("#create").change(function(){
                create();
            });
            $("#retry").change(function(){
                retry();
            })
            var createformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
            function create() {
                var createVal = $("#create").val(); 
                if (createVal == ''){
                    // console.log(inpval)
                    $("#reminderCreate").html("You must enter your password");
                    $("#reminderCreate").prop("class", "text-danger");
                }else if (createformat.test(createVal)){
                    $("#reminderCreate").html("You have entered a Valid password address!");
                    $("#reminderCreate").prop("class", "text-success");
                }else {
                    $("#reminderCreate").html("Password containing at least 8 characters, 1 number, 1 upper and 1 lowercase");
                    $("#reminderCreate").prop("class", "text-danger");
                }
            }
            
            function retry() {
                var createVal = $("#create").val(); 
                var retryVal = $("#retry").val(); 
                if (retryVal == createVal){
                    $("#reminderRetry").html("Work confirmation!");
                    $("#reminderRetry").prop("class", "text-success");
                }else {
                    $("#reminderRetry").html("Wrong password, please re-enter!");
                    $("#reminderRetry").prop("class", "text-danger");
                }
            }
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
                create();
                retry();
                var createVal = $("#create").val(); 
                var retryVal = $("#retry").val(); 
                if ((createformat.test(createVal))&&(retryVal == createVal)) {
                    var code = $("#code").val();
                    var password = $("#retry").val();
                    let Form = new FormData();
                        Form.append("Code", code);
                        Form.append("Password", password);
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
                                if (data == "Please enter a valid code"){
                                    $('#message').html(data)
                                }else {
                                    window.location.replace("index.php");
                                }
                                a()
                            }
                        });
                }
            })
        })
        </script>
    </body>

</html>