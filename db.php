<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'taxi_fee';
$port = 3306;

$dsn = "mysql:host=".$servername.";dbname=".$db_name.";port=".$port;
$conn = new PDO($dsn, $username, $password);

?>