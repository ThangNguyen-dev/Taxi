<?php

$servername = 'sql12.freemysqlhosting.net';
$username = 'sql12381775';
$password = '1Aas3y5fHJ';
$db_name = 'sql12381775';
$port = 3306;

$dsn = "mysql:host=".$servername.";dbname=".$db_name.";port=".$port;
$conn = new PDO($dsn, $username, $password);

?>