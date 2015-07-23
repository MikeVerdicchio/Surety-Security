function postComment(){
	document.getElementById("username").innerHTML = $('#usernameInput').val();
	document.getElementById("comment").innerHTML = $('#commentInput').val();
	document.cookie= $('#usernameInput').val() + " " + $('#commentInput').val();
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