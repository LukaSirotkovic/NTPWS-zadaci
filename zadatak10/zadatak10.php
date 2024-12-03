<?php
// Inicijaliziramo varijable za unos i rezultat
$rezultat = "";
$ulazniNiz = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dohvaćamo uneseni tekst
    $ulazniNiz = $_POST['ulazniNiz'];
    // Brojimo riječi u tekstu
    $brojRijeci = str_word_count($ulazniNiz);
    $rezultat = "Uneseni niz sadrži $brojRijeci riječi.";
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak: str_word_count</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
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
            margin-bottom: 10px;
        }
        textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
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
        <h1>Zadatak: str_word_count</h1>
        <form method="post" action="">
            <label for="ulazniNiz">Unesite tekst za prebrojavanje riječi:</label>
            <textarea id="ulazniNiz" name="ulazniNiz" required><?php echo htmlspecialchars($ulazniNiz); ?></textarea>
            <button type="submit">Ispiši broj riječi</button>
        </form>

        <?php
        if (!empty($rezultat)) {
            echo "<div class='result'>$rezultat</div>";
        }
        ?>
    </div>
</body>
</html>
