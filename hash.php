<?php
$stringy = "The resulting hash is: " . hash($_REQUEST["hash"], $_REQUEST["string"]);
echo $stringy;
?>