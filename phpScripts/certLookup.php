<?php 
$site= htmlspecialchars($_REQUEST["site"]);
exec('openssl s_client -connect '. $site.':443 < /dev/null',$output);
echo "<br>";
foreach($output as $line){
	if(strpos($line,'Protocol') !== false){
	echo $line . "<br>";
}
}
?>