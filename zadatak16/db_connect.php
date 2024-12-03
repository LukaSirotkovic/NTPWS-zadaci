<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zadaci";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Pogreška pri povezivanju: " . $conn->connect_error);
}
?>
