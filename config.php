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
$db = mysqli_select_db(villas,$conn);
$query = mysql_query("select * from villas",$conn);



