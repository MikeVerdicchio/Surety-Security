<?php

function getData(){
	$user = 'root';
	$pass = '';
	$db = 'testdb';

	$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	$result = mysql_query('SELECT * FROM testdb.testingtables');
	$data = [];
	while ($row = mysql_fetch_array($result)) {
		array_push($data,$row);
	}
	if (!$result) {
		die('Invalid query: ' . mysql_error());
	}
	$db->close();
	return $data;
}
getData();
?>