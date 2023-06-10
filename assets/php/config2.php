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
    $email2 = $_POST['email2'];
    $voornaam2 = $_POST['voornaam2'];
    $achternaam2 = $_POST['achternaam2'];
    $bod2 = $_POST['bod2'];

    $stmt = $conn->prepare('INSERT INTO biedingen2 (email2, voornaam2, achternaam2, bod2, datum2) VALUES (?, ?, ?, ?, NOW())');
    $stmt->execute([$email2, $voornaam2, $achternaam2, $bod2]);
    $message = 'Bod succesvol toegevoegd.';
    echo "<script>showPrompt('$message');</script>";
}
