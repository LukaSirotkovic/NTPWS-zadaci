<?php
// Trenutno vrijeme i dan
date_default_timezone_set("Europe/Zagreb");
$trenutnoVrijeme = new DateTime();
$sati = $trenutnoVrijeme->format("H");
$dan = $trenutnoVrijeme->format("l"); // Naziv dana (Monday, Tuesday, ...)

// Državni praznici (format: MM-DD)
$praznici = [
    "01-01", // Nova godina
    "06-01", // Sveta tri kralja
    "05-01", // Praznik rada
    "08-15", // Velika Gospa
    "12-25", // Božić
    "12-26"  // Sveti Stjepan
];

// Provjera je li danas praznik
$datum = $trenutnoVrijeme->format("m-d");
$jePraznik = in_array($datum, $praznici);

// Provjera radnog vremena
if ($jePraznik) {
    $poruka = "Dućan je zatvoren zbog praznika.";
} elseif ($dan === "Sunday") {
    $poruka = "Dućan je zatvoren jer je nedjelja.";
} elseif ($dan === "Saturday") {
    if ($sati >= 9 && $sati < 14) {
        $poruka = "Dućan je otvoren (subotnje radno vrijeme: 9 - 14).";
    } else {
        $poruka = "Dućan je zatvoren (subotnje radno vrijeme: 9 - 14).";
    }
} else {
    if ($sati >= 8 && $sati < 20) {
        $poruka = "Dućan je otvoren (radno vrijeme: 8 - 20).";
    } else {
        $poruka = "Dućan je zatvoren (radno vrijeme: 8 - 20).";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radno vrijeme dućana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 50px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .message {
            font-size: 18px;
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Radno vrijeme dućana</h1>
        <p>Trenutno vrijeme: <?php echo $trenutnoVrijeme->format("H:i"); ?></p>
        <p>Dan: <?php echo $trenutnoVrijeme->format("l, d.m.Y"); ?></p>
        <div class="message">
            <?php echo $poruka; ?>
        </div>
    </div>
</body>
</html>
