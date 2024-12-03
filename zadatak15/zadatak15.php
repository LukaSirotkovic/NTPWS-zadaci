<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga korisnika</title>
</head>

<body>
    <h1>Pretraga korisnika</h1>
    <form action="" method="POST">
        <label for="search">Unesite ime ili prezime korisnika:</label>
        <input type="text" id="search" name="search" required>
        <button type="submit">Pretraži</button>
    </form>
    <hr>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include 'db_connect.php'; // Spoj na bazu podataka
    
        // Sigurno dohvaćanje unosa korisnika
        $search = $conn->real_escape_string($_POST['search']);

        // SQL upit za pretragu po imenu ili prezimenu
        $sql = "SELECT * FROM users WHERE name LIKE '%$search%' OR lastname LIKE '%$search%'";
        $result = $conn->query($sql);

        // Provjera rezultata pretrage
        if ($result->num_rows > 0) {
            echo "<h2>Rezultati pretrage:</h2><ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['name']) . " " . htmlspecialchars($row['lastname']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nema rezultata za pretragu: <strong>" . htmlspecialchars($search) . "</strong></p>";
        }

        $conn->close();
    }
    ?>
</body>

</html>