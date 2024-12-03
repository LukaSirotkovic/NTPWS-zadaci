<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "korisnici";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Pogreška pri povezivanju: " . $conn->connect_error);
}
?>
