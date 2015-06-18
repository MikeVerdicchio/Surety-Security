$('#submit').click(function() {
    if (document.getElementById("username").textContent.equals("SuretySecurity") && document.getElementById("password").textContent.equals("helloworld")) {
        var code = Math.floor((Math.random() * 999999) + 100000);
        alert($code);
        var input = prompt("Please enter the code given to you.", "");

        if ($code == $input) {
			alert("Access granted!");
		} else {
			alert ("Incorrect code.");
		}
    } else {
        alert("Incorrect username and/or password. Please try again.");
    }

    return false;
});