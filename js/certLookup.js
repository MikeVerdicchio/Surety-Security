function certLookup() {
	var xmlhttp = new XMLHttpRequest();
	var site = $('#site').val();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("certInfo").innerHTML = xmlhttp.responseText;
			var num = document.getElementById("num").innerHTML;
			if(parseInt(num) >=4){
				document.getElementById("taskonestatus").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;<b>Complete</b>";
			}
		}
	}
	xmlhttp.open("GET", "phpScripts/certLookup.php?site=" + site);
	xmlhttp.send();
}