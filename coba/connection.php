<?php

$hostname = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_elapak';

$con = new mysqli($hostname, $user, $pass, $db);
if ($con->connect_error) {
	//print('Database not found');
}
else {
	//print('Connected');
}



?>