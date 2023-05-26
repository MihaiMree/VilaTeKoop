<?php
$hostname = 'localhost';      // Replace with your database hostname
$username = '89530';  // Replace with your database username
$password = '9O4?3p0ky';  // Replace with your database password
$database = 'Database89530';  // Replace with your database name

// Create a new mysqli object and establish a connection
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check if connected to the database
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
} else {
    echo "Connected to the database successfully!";
}
?>