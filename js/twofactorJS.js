$(document).ready(function() {
    $('#submit').click(function() {
        if ((document.getElementById("username").value === "SuretySecurity") && (document.getElementById("password").value === "helloworld")) {
            var code = Math.floor((Math.random() * 999999) + 100000);
            var input = prompt("The Code Generator has created the following code for you: " + code + ". Please enter it below to log in.", code);

            if (code == input) {
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
        } else {
            $('#response').removeClass("alert alert-info text-center");
            $('#response').removeClass("alert alert-success text-center");
            $('#response').addClass("alert alert-danger text-center");
            $('#response').html("<strong>Error! </strong>Incorrect username and/or password. Please try again.");
        }
    });
});