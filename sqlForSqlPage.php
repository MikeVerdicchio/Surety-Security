<?php
$user = 'root';
$pass = '';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
$var = $_POST['username'];
$result = mysql_query("SELECT * FROM testdb.users WHERE username ='". $var ."'");
$data = [];
while ($row = mysql_fetch_array($result)) {
	$data = $row;
	echo "Username: ".$row['username']."<br>Password: ". $row['password']."<br>";
}
if (!$result) {
	die('Invalid query: ' . mysql_error());
}

$db->close();
?>