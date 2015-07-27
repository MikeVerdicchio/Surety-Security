<?php
$salt = uniqid(mt_rand(), true);
$stringy = "The resulting hash is: " . hash($_REQUEST["hash"], $_REQUEST["string"]) . "<br>";
$stringy .= "With salt " . $salt . " is " . hash($_REQUEST["hash"], $_REQUEST["string"].$salt);
echo $stringy;
?>