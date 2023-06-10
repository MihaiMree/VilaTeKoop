<?php

$servername = "localhost"; // Replace with your server name
$username = "mihai"; // Replace with your MySQL username
$password = "2Fp0bb58*"; // Replace with your MySQL password
$dbname = "ftp89621"; // Replace with your MySQL database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Verwerk het ontvangen bod
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $bod = $_POST['bod'];

    $stmt = $conn->prepare('INSERT INTO biedingen (email, voornaam, achternaam, bod, datum) VALUES (?, ?, ?, ?, NOW())');
    $stmt->execute([$email, $voornaam, $achternaam, $bod]);
    $message = 'Bod succesvol toegevoegd.';
    echo "<script>showPrompt('$message');</script>";
}

