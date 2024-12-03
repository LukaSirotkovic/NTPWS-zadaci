<?php
include 'db_connect.php'; // Povezivanje na bazu

$sql = "SELECT 
            korisnici.name AS first_name, 
            korisnici.lastname AS last_name, 
            countries.name AS country_name 
        FROM 
            korisnici
        INNER JOIN 
            countries 
        ON 
            korisnici.country_id = countries.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) . " (" . htmlspecialchars($row['country_name']) . ")</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

$conn->close();
?>
