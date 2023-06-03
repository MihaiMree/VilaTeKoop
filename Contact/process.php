<?php

$hostname = "localhost";
$username = "contact";
$password = "h0m2Di28?";
$database = "Database89530";
$mysqli = new mysqli($hostname, $username, $password, $database);


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}


$naam = $_POST['naam'];
$adres = $_POST['adres'];
$telefoonnummer = $_POST['telefoonnummer'];
$email = $_POST['email'];
$vraag = $_POST['vraag'];




$sql = "INSERT INTO contact_form (naam, adres, telefoonnummer, email, vraag) VALUES ('$naam', '$adres', '$telefoonnummer', '$email', '$vraag')";


if ($mysqli->query($sql)) {
    echo "Form is verzonden.";
} else {
    echo "Error: " . $mysqli->error;
}


$mysqli->close();
?>