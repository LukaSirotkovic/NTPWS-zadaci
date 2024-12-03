<?php
// Inicijaliziramo varijable za unos i rezultat
$rezultat = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prviBroj = floatval($_POST['prviBroj']);
    $drugiBroj = floatval($_POST['drugiBroj']);
    $operacija = $_POST['operacija'];

    // Koristimo switch naredbu za odabir operacije
    switch ($operacija) {
        case "+":
            $rezultat = $prviBroj + $drugiBroj;
            break;
        case "-":
            $rezultat = $prviBroj - $drugiBroj;
            break;
        case "*":
            $rezultat = $prviBroj * $drugiBroj;
            break;
        case "/":
            if ($drugiBroj != 0) {
                $rezultat = $prviBroj / $drugiBroj;
            } else {
                $rezultat = "Dijeljenje s nulom nije dozvoljeno!";
            }
            break;
        default:
            $rezultat = "Nepoznata operacija!";
    }
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator (Switch naredba)</title>
</head>
<body>
    <h1>Kalkulator (Switch naredba)</h1>
    <form action="" method="post">
        <label for="prviBroj">Upiši prvi broj:</label>
        <input type="number" step="any" id="prviBroj" name="prviBroj" required><br><br>

        <label for="drugiBroj">Upiši drugi broj:</label>
        <input type="number" step="any" id="drugiBroj" name="drugiBroj" required><br><br>

        <label>Odaberi operaciju:</label><br>
        <button type="submit" name="operacija" value="+">+</button>
        <button type="submit" name="operacija" value="-">-</button>
        <button type="submit" name="operacija" value="*">*</button>
        <button type="submit" name="operacija" value="/">/</button>
    </form>

    <?php if ($rezultat !== ""): ?>
        <h2>Rezultat: <?php echo $rezultat; ?></h2>
    <?php endif; ?>
</body>
</html>
