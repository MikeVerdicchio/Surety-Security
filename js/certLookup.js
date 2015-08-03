function certLookup() {
	var xmlhttp = new XMLHttpRequest();
	var site = $('#site').val();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("certInfo").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "phpScripts/certLookup.php?site=" + site);
	xmlhttp.send();
}