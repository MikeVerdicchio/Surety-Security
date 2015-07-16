function hash() {
	var xmlhttp = new XMLHttpRequest();
	var str = $('#str').val();
	var hash = $('#hash').val();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("result").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "phpScripts/hash.php?string=" + str + "&hash=" + hash);
	xmlhttp.send();
}
function hashLookup() {
	var xmlhttp = new XMLHttpRequest();
	var toCrack = $('#toCrack').val();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("crack").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "phpScripts/hashlookup.php?hash=" + toCrack);
	xmlhttp.send();
}

function problem1(){
	var hash = $('#prob1str').val();
	if(hash == "security5"){
		document.getElementById("prob1ans").innerHTML = "Correct!";
	}
	else{
		document.getElementById("prob1ans").innerHTML = "Incorrect";
	}
}