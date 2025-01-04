<?php
$host = 'localhost'; // Your MySQL host (usually 'localhost')
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password
$database = 'payroll'; // Your MySQL database name

$mysqli = new mysqli($host, $username, $password, $database);

if($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
