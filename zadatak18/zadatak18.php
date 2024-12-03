<?php
include 'db_connect.php';

// Dohvati sve korisnike i njihove pripadajuće države
$sql = "SELECT users.id AS user_id, users.name AS first_name, users.lastname AS last_name, countries.name AS country_name, countries.id AS country_id
        FROM users
        INNER JOIN countries ON users.country_id = countries.id";
$result = $conn->query($sql);

// Prikaz korisnika s opcijom uređivanja
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Država</th>
                <th>Akcija</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['first_name']) . "</td>
                <td>" . htmlspecialchars($row['last_name']) . "</td>
                <td>" . htmlspecialchars($row['country_name']) . "</td>
                <td>
                    <a href='edit_user.php?id=" . $row['user_id'] . "'>Uredi</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nema korisnika u bazi.";
}

$conn->close();
?>