$(document).ready(function () {
    $("#Login").click(function () {
        var Email = $('#Email').val();
        var Password = $('#Password').val();
        let Form = new FormData();
        Form.append("Password", Password);
        Form.append("Email", Email);
        $.ajax({
            type: "POST",
            url: 'loginAcc.php',
            dataType: "text",
            async: false,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            data: Form,
            success: function (data) {
                if (data == "The email entered does not belong to any account!") {
                    $("#message").html(data);
                    $("#message").prop("class", "text-danger");
                } else if (data == "wrong password!") {
                    $("#reminderPassword").html(data);
                    $("#reminderPassword").prop("class", "text-danger");
                } else if (data == "Unconfimred") {
                    window.location.replace("confirmemail.php");
                } else {
                    window.location.replace("index.php");
                }
            }
        });
    });
    $("#Forgot").click(function () {
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
            success: function (data) {
                window.location.replace("forgot.php");
            }
        });
    });
    $("#Email").change(function () {
        $("#message").html('');
    }); $("#Password").change(function () {
        $("#reminderPassword").html('');
    });
    $(".show-btn").click(function () {
        var passField = $(this).siblings("input");
        if (passField.attr('type') === "password") {
            passField.prop("type", "text");
            $(this).children().prop("class", "fa-solid fa-eye-slash");
        } else {
            passField.prop("type", "password");
            $(this).children().prop("class", "fa-solid fa-eye");
        }
    });
    $("#Name").change(function () {
        name();
    });
    $("#create").change(function () {
        create();
    });
    $("#retry").change(function () {
        retry();
    })
        ;
    $("#mail").change(function () {
        mail();
    })
    var nameformat = /^[a-zA-Z0-9]+$/;
    function name() {
        var nameVal = $("#Name").val();
        if (nameVal == '') {
            $("#reminderName").html("You must enter Account name ");
            $("#reminderName").prop("class", "text-danger");
        } else if (nameformat.test(nameVal)) {
            $("#reminderName").html("You have entered a Valid Account name address!");
            $("#reminderName").prop("class", "text-success");
        } else {
            $("#reminderName").html("Account names are Latin letters and numbers from 0 to 9");
            $("#reminderName").prop("class", "text-danger");
        }
    }
    var createformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

    function create() {
        var createVal = $("#create").val();
        if (createVal == '') {
            // console.log(inpval)
            $("#reminderCreate").html("You must enter your password");
            $("#reminderCreate").prop("class", "text-danger");
        } else if (createformat.test(createVal)) {
            $("#reminderCreate").html("You have entered a Valid password address!");
            $("#reminderCreate").prop("class", "text-success");
        } else {
            $("#reminderCreate").html("Password containing at least 8 characters, 1 number, 1 upper and 1 lowercase");
            $("#reminderCreate").prop("class", "text-danger");
        }
    }

    function retry() {
        var createVal = $("#create").val();
        var retryVal = $("#retry").val();
        if (retryVal == createVal) {
            $("#reminderRetry").html("Work confirmation!");
            $("#reminderRetry").prop("class", "text-success");
        } else {
            $("#reminderRetry").html("Wrong password, please re-enter!");
            $("#reminderRetry").prop("class", "text-danger");
        }
    }
    
    var mailformat = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    function mail() {
        var mailVal = $("#mail").val();
        if (mailVal == '') {
            $("#reminderMail").html("You must enter your email");
            $("#reminderMail").prop("class", "text-danger");
        } else if (mailformat.test(mailVal)) {
            $("#reminderMail").html("You have entered a Valid email address!");
            $("#reminderMail").prop("class", "text-success");
        } else {
            $("#reminderMail").html("You must enter your email in the correct format your email.@domain.");
            $("#reminderMail").prop("class", "text-danger");
        }
    }
    $("#sigup").click(function () {
        name();
        mail();
        create();
        retry();
        // console.log($('#exampleCheck1').is(':checked'))
        var nameVal = $("#Name").val();
        var createVal = $("#create").val();
        var retryVal = $("#retry").val();
        var mailVal = $("#mail").val();
        if ((nameformat.test(nameVal)) && (createformat.test(createVal)) && (mailformat.test(mailVal)) && (retryVal == createVal)) {
            let Form = new FormData();
            Form.append("Name", nameVal);
            Form.append("Password", createVal);
            Form.append("Mail", mailVal);
            $.ajax({
                type: "POST",
                url: 'insert.php',
                dataType: "text",
                async: false,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                data: Form,
                success: function (data) {
                    console.log(data)
                    if (data == "Email already exists") {
                        $("#reminderMail").html(data);
                        $("#reminderMail").prop("class", "text-danger");
                    } else {
                        window.location.replace("confirmemail.php");
                    }
                }
            });

        }

    });

});