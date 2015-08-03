<?php 
$site= htmlspecialchars($_REQUEST["site"]);
exec('openssl s_client -connect '. $site.':443',$output);
foreach($output as $line){
	echo $line . "<br>";
}
?>