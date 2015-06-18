<?php 
// Variables
$type   = "crack";
$apikey = "0GKhUwBZgA0x8Xux";
$phrase = $_REQUEST["hash"];

// Send HTTP GET request
$return = json_decode(file_get_contents("http://api.md5crack.com/".$type."/".$apikey."/".$phrase));
                
// Output the result
if($return->phrase != null){
	echo "Your cracked hash is: " .$return->phrase;
}
else{
	echo "Hash Not Found";
}
?>