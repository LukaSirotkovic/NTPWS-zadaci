<?php
// Definicija niza vozila
$cars = array("Audi", "BMW", "Renault", "Citroen");

// Provjera je li forma poslana
$odabranoVozilo = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $odabranoVozilo = $_POST['vozilo'];
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izbor vozila</title>
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
        form {
            margin: 20px 0;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="radio"] {
            margin-right: 10px;
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
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Izbor vozila</h1>
        <form method="post" action="">
            <label>Označi vozilo:</label>
            <?php
            // Generiranje radio buttona za svako vozilo
            foreach ($cars as $car) {
                echo "<div><input type='radio' id='$car' name='vozilo' value='$car' required>
                      <label for='$car'>$car</label></div>";
            }
            ?>
            <button type="submit">Pošalji</button>
        </form>

        <?php
        // Prikaz rezultata
        if (!empty($odabranoVozilo)) {
            echo "<div class='result'>Odabrali ste vozilo: <strong>$odabranoVozilo</strong></div>";
        }
        ?>
    </div>
</body>
</html>
