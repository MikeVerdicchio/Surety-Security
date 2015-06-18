$(document).ready(function () {
    $('#submit').click(function () {
        if ( (document.getElementById("username").textContent === "SuretySecurity") && (document.getElementById("password").textContent === "helloworld") ) {
            var code = Math.floor((Math.random() * 999999) + 100000);
            window.alert(code);
            var input = window.prompt("Please enter the code given to you.", "");

            if (code === input) {
                window.alert("Access granted!");
            } else {
                window.alert("Incorrect code.");
            }
        } else {
            window.alert("Incorrect username and/or password. Please try again.");
        }
    });
});