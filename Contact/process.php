<?php 
include("config.php");

extract($_POST);
$query = "INSERT INTO  `contact-data` (`naam`,`adres`,`telefoonnummer`,`email`,`vraag`) VALUES ('".$naam."','".$adres."','".$telefoonnummer."','".$email."', '".$vraag."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Something went wrong";
}

echo "thanks for submiting your quyery";
$mysqli->close();

print_r($_POST);


?>
