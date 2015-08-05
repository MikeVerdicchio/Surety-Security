<?php 
$site= htmlspecialchars($_REQUEST["site"]);
exec('openssl s_client -connect '. $site.':443 < /dev/null',$output);
echo "<br>";
$certChain = array();
foreach($output as $line){
	if(strpos($line,'CN=') !== false){
		array_push($certChain, 4);
	}
	if(strpos($line,'END CERTIFICATE') !== false){
		print_r($certChain);
	}
	if(strpos($line,'Cipher') !== false){
		$cipher = explode(":", $line);
		$cipher = str_replace("-",", ",$cipher[1]);
		echo "Ciphers supported: ". $cipher . "<br>";
	}
	if(strpos($line,'Protocol') !== false){
		$protocol = explode(":", $line);
		echo  "Version of SSL/TLS: <b>". $protocol[1] . "</b><br>";
	}
}
?>