$(document).ready(function() {
    $('#password').keyup(function() {
        var lower = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        var upper = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        var numbers = ['0','1','2','3','4','5','6','7','8','9'];
        var symbols = ['~','`','!','@','#','$','%','^','&','*','(',')','-','_','+','=','[',']','{','}','|','\\',';',':','<',',','.','>','?','?','"','\'',' '];
        var pass = String(document.getElementById("password").value);
        var space = 0;
        for(i = 0; i < pass.length; i++){
            if(lower.indexOf(pass.charAt(i)) != -1){
                space+=26;
                break;
            }
        }
        for(i = 0; i < pass.length; i++){
            if(upper.indexOf(pass.charAt(i)) != -1){
                space+=26;
                break;
            }
        }
        for(i = 0; i < pass.length; i++){
            if(numbers.indexOf(pass.charAt(i)) != -1){
                space+=10;
                break;
            }
        }
        for(i = 0; i < pass.length; i++){
            if(symbols.indexOf(pass.charAt(i)) != -1){
                space+=33;
                break;
            }
        }
        var num = Math.pow(space, document.getElementById("password").value.length);
        num = commafy(num);
        if(pass.length > 0){
            document.getElementById("strength").innerHTML = (num + " combinations");
        }
        else{
            document.getElementById("strength").innerHTML = "";
        }
        
    });
});

function commafy(num) {
    var str = num.toString().split('.');
    if (str[0].length >= 5) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
    }
    if (str[1] && str[1].length >= 5) {
        str[1] = str[1].replace(/(\d{3})/g, '$1 ');
    }
    return str.join('.');
}