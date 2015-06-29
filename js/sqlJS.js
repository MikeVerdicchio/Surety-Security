function checkIfAlwaysTrue(){
	var expression = /'\sOR\s([0-9])\b[^>]*=\1/;
	if(expression.exec($('#sql').val())){
		document.getElementById("result").innerHTML = "Success!";
	}
}

function showHint(){
	document.getElementById("hint").innerHTML = "Something equal to itself is always true.";
}