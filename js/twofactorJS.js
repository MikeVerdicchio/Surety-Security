var code = 0;

$(document).ready(function() {
    "use strict";
    $('#login1').click(function() {
        if ((document.getElementById("username").value === "SuretySecurity") && (document.getElementById("password").value === "helloworld")) {
            code = Math.floor((Math.random() * 999999) + 100000);
            $('#message-intro').html("The Code Generator has created the following code for you: " + code + ". Please enter it below to log in.");
            $('#message-text').html(code);
            //var input = prompt("The Code Generator has created the following code for you: " + code + ". Please enter it below to log in.", code);

        } else {
            $('#response').removeClass("alert alert-info text-center");
            $('#response').removeClass("alert alert-success text-center");
            $('#response').addClass("alert alert-danger text-center");
            $('#response').html("<strong>Error! </strong>Incorrect username and/or password. Please try again.");
        }
    });

    $('#login2').click(function() {
        if (code == (document.getElementById("message-text").value)) {
            $('#response').removeClass("alert alert-info text-center");
            $('#response').removeClass("alert alert-danger text-center");
            $('#response').addClass("alert alert-success text-center");
            $('#response').html("<strong>Success! </strong>You have logged in.");
        } else {
            $('#response').removeClass("alert alert-info text-center");
            $('#response').removeClass("alert alert-success text-center");
            $('#response').addClass("alert alert-danger text-center");
            $('#response').html("<strong>Error! </strong>Incorrect authentication code. Please try again.");
        }
        $('#entercode').modal('hide')
    });
});