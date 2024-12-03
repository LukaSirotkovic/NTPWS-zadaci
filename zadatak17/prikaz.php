<?php
include 'db_connect.php'; // Povezivanje na bazu

$sql = "SELECT 
            users.name AS first_name, 
            users.lastname AS last_name, 
            countries.name AS country_name 
        FROM 
            users
        INNER JOIN 
            countries 
        ON 
            users.country_id = countries.id";

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
