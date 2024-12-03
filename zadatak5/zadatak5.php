<?php

$zamisljeniBroj = rand(1, 9);

$poruka = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uneseniBroj = intval($_POST['broj']);

    if ($uneseniBroj === $zamisljeniBroj) {
        $poruka = "<p style='color: green;'>Čestitamo! Pogodili ste broj $zamisljeniBroj.</p>";
    } else {
        $poruka = "<p style='color: red;'>Krivo, probajte ponovo. Zamišljeni broj je bio $zamisljeniBroj.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogodi broj</title>
</head>
<body>
    <h1>Igra: Pogodi broj</h1>
    <form action="" method="post">
        <label for="broj">Upišite jedan broj od 1 do 9:</label>
        <input type="number" id="broj" name="broj" min="1" max="9" required>
        <button type="submit">Pogodi, probaj ponovo!</button>
    </form>
    <?php
    // Prikaz poruke
    echo $poruka;
    ?>
</body>
</html>
