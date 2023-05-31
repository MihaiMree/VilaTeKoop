<?php
$hostname = 'localhost';      // Replace with your database hostname
$username = '';  // Replace with your database username
$password = '';  // Replace with your database password
$database = '';  // Replace with your database name

// Create a new mysqli object and establish a connection
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check if connected to the database
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
} else {
    echo "Connected to the database successfully!";
}
?>