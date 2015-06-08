<?php

$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Connected <br>";
echo $_POST['val'];

$sql = "INSERT INTO testingtables (number, stringy, apple, pear)
VALUES (5, '". (string)$_POST['val']."', True, 5.0)";

if ($db->query($sql) === TRUE) {
	echo "No Errors";
} else {
	echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
header('Location: xss.php');
?>