<?php

echo 'hello php2mysql';

$host = 'db'; //servise name from docker-compose.yml
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysql($host,$user,$password,$db);
if($conn->connect_error){
	echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully connected to MYSQL';


?>
