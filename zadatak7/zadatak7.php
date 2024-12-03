<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračun ocjena</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Izračun prosjeka i ocjene</h1>
        <form method="post" action="">
            <label for="prviKolokvij">Ocjena I. kolokvija (1-5):</label>
            <input type="number" id="prviKolokvij" name="prviKolokvij" min="1" max="5" required>

            <label for="drugiKolokvij">Ocjena II. kolokvija (1-5):</label>
            <input type="number" id="drugiKolokvij" name="drugiKolokvij" min="1" max="5" required>

            <button type="submit">Izračunaj</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Dohvat unesenih ocjena
            $prviKolokvij = intval($_POST['prviKolokvij']);
            $drugiKolokvij = intval($_POST['drugiKolokvij']);

            // Provjera uvjeta
            if ($prviKolokvij < 1 || $prviKolokvij > 5 || $drugiKolokvij < 1 || $drugiKolokvij > 5) {
                echo "<div class='result'>Unesene ocjene moraju biti u rasponu od 1 do 5.</div>";
            } elseif ($prviKolokvij == 1 || $drugiKolokvij == 1) {
                echo "<div class='result'>Konačna ocjena: <strong>1 (Negativna)</strong></div>";
            } else {
                // Izračun prosjeka
                $prosjek = ($prviKolokvij + $drugiKolokvij) / 2;
                $konacnaOcjena = round($prosjek);
                echo "<div class='result'>Prosjek ocjena: <strong>$prosjek</strong></div>";
                echo "<div class='result'>Konačna ocjena: <strong>$konacnaOcjena</strong></div>";
            }
        }
        ?>
    </div>
</body>
</html>
