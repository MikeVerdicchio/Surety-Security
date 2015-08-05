<?php 
$site= htmlspecialchars($_REQUEST["site"]);
exec('openssl s_client -connect '. $site.':443 < /dev/null',$output);
echo "<br>";
$certChain = array();
$currentCert = "";
foreach($output as $line){
	if(strpos($line,'CN=') !== false){
		$cert = explode('CN=', $line);
		if($cert[1] != $currentCert){
		array_push($certChain, $cert[1]);
		$currentCert = $cert[1];
	}
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
		echo  "Version of SSL/TLS: ". $protocol[1] . "<br>";
	}
}
?>