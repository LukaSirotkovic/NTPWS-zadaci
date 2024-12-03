<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračunaj C</title>
</head>
<body>
    <h1>Izračunajte vrijednost c</h1>
    <form action="" method="post">
        <label for="a">Vrijednost a:</label>
        <input type="number" id="a" name="a" required><br><br>

        <label for="b">Vrijednost b:</label>
        <input type="number" id="b" name="b" required><br><br>

        <button type="submit">Pošalji</button>
    </form>

    <?php
    // Provjera je li forma poslana
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Dohvat vrijednosti iz forme
        $a = $_POST['a'];
        $b = $_POST['b'];

        // Izračun vrijednosti c
        $c = (3 * $a - $b) / 2;

        // Prikaz rezultata
        echo "<h2>Rezultat</h2>";
        echo "<p>Vrijednost c za a = $a i b = $b iznosi: <strong>$c</strong></p>";
    }
    ?>
</body>
</html>
