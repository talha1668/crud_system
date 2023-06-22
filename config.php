<?php
session_start();
// Establish database connection (replace 'host', 'username', 'password', and 'database' with your actual values)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'webb';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>