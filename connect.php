<?php
$host = 'lifting-app';
$username = 'your_username';
$password = 'your_password';
$database = '';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
