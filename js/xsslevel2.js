function buy(){
	var id = $('#id').val();
	var qty = $('#qty').val();
	var name = $('#name').val();
	var price = $('#price').val();
	window.location.replace("/xss2/checkout?id="+id+"&qty="+qty+"&name="+name+"&price="+price);
}
function returnHome(){
	window.location.replace("/xss2/storefront");
}
function urlInterpret(){
	var url = document.createElement("a");
	url.href = $('#url').val();
	console.log(url.search);
	window.location.href = ("/xss2"+url.pathname + url.search);
}