$(document).ready(function () {
    $('#submit').click(function () {
        if ((document.getElementById("username").value === "SuretySecurity") && (document.getElementById("password").value === "helloworld")) {
            var code = Math.floor((Math.random() * 999999) + 100000);
            var input = prompt("Your generated code is " + code + ". Please enter it below to log in.", code);

			if (code == input) {
                window.alert("Access granted!");
            } else {
                window.alert("Incorrect code.");
            }
        } else {
            window.alert("Incorrect username and/or password. Please try again.");
        }
    });
});