<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbse = 'blog';

$conn = new mysqli($host, $user, $pass, $dbse);
if ($conn->connect_errno) {
	echo "Connection failed" . $conn->connect_error;
	exit();
}

 ?>