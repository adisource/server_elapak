<?php
$hostname = 'localhost';
$user = 'root';
$pass = '';
$db = 'lapak_desa';

$conn = new mysqli($hostname, $user, $pass, $db);
if ($conn->connect_error) {
	//print('Database not found');
}
else {
    //print('Connected');
}
?>