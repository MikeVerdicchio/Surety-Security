$(document).ready(function () {
	$('#password').keyup(function () { 
		document.getElementById("strength").innerHTML = Math.pow(95,document.getElementById("password").value.length) + " combinations";
	});
});
function hash() {
	var xmlhttp = new XMLHttpRequest();
	var str = $('#str').val();
	var hash = $('#hash').val();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("result").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "hash.php?string=" + str + "&hash=" + hash);
	xmlhttp.send();
}