$(document).ready(function () {
	$('#password').keyup(function () { 
		document.getElementById("strength").innerHTML = Math.pow(95,document.getElementById("password").value.length) + " combinations";
	});
});