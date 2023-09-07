<?php

$servername = "localhost"; // Replace with your server name
$username = "mihai"; // Replace with your MySQL username
$password = "yxt23V9_4"; // Replace with your MySQL password
$dbname = "ftp89621"; // Replace with your MySQL database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Verwerk het ontvangen bod
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email3 = $_POST['email3'];
    $voornaam3 = $_POST['voornaam3'];
    $achternaam3 = $_POST['achternaam3'];
    $bod3 = $_POST['bod3'];

    $stmt = $conn->prepare('INSERT INTO biedingen3 (email3, voornaam3, achternaam3, bod3, datum3) VALUES (?, ?, ?, ?, NOW())');
    $stmt->execute([$email3, $voornaam3, $achternaam3, $bod3]);
    $message = 'Bod succesvol toegevoegd.';
    echo "<script>showPrompt('$message');</script>";
}
