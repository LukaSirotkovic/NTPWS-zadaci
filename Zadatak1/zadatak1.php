<?php

$naslov = "Da Vincijev kod";
$tekst = "Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.";
$poveznica = "https://hr.wikipedia.org/Da_Vincijev_kod";
?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informacije o knjizi Da Vincijev kod autora Dana Browna.">
    <meta name="keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler, knjige">
    <meta name="author" content="Vaše ime">
    <title><?php echo $naslov; ?></title>
</head>

<body>
    <h1><?php echo $naslov; ?></h1>
    <p><?php echo $tekst; ?></p>
    <p>
        Pročitajte više na poveznici:
        <a href="<?php echo $poveznica; ?>" target="_blank">Wikipedia - Da Vincijev kod</a>
    </p>
</body>

</html>
<!-- Naziv dokumenta: zadatak1.php -->