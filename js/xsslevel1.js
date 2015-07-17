function postComment(){
	document.getElementById("username").innerHTML = $('#usernameInput').val();
	document.getElementById("comment").innerHTML = $('#commentInput').val();
}
function register(){
	var username = $('#username').val();
	window.location.replace("/xsslevel1tasks?username=" +username);
}
function urlInterpret(){
	var url = document.createElement("a");
	url.href = $('#url').val();
	console.log(url.pathname);
}