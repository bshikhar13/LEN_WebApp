<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'len';


$conn = mysql_connect($host, $user, $password);

if (!$conn) {
	die('Could not connect: '.mysql_error());
}


mysql_select_db($db);

?>