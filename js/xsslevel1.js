function postComment(){
	document.cookie= Date() + "=" + $('#usernameInput').val() + "," + $('#commentInput').val() + ";";
	var table = document.getElementById('t');
	var row = table.insertRow(-1);
	var cell1 = row.insertCell(0);
	var Cell2 = row.insertCell(1);
	cell1.innerHTML = $('#usernameInput').val();
	Cell2.innerHTML = $('#commentInput').val();
	if($('#commentInput').val().indexOf("onmouseover") > -1 && $('#commentInput').val().indexOf("img") > -1 ){
		window.top.document.getElementById("taskonestatus").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;<b>Complete</b>";
	}
}
function register(){
	var username = $('#username').val();
	window.location.replace("/xss/home?username=" +username);
}
function search(){
	var term = $('#term').val();
	window.location.href =("/xss/search?term=" + term);
}
function urlInterpret(){
	var url = document.createElement("a");
	url.href = $('#url').val();
	console.log(url.search);
	window.location.href = ("/xss"+url.pathname + url.search);
}