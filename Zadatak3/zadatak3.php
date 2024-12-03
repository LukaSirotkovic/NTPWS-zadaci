<?php
$title = "Da Vincijev kod";
$link = "https://hr.wikipedia.org/" . str_replace(' ', '_', $title); 
$text = $title . " je kriminalistički triler američkog pisca Dana Browna."; 
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informacije o knjizi Da Vincijev kod autora Dana Browna.">
    <meta name="keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler, knjige">
    <meta name="author" content="Vaše ime">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $text; ?></p>
    <p>
        Pročitajte više na poveznici: 
        <a href="<?php echo $link; ?>" target="_blank">Wikipedia - <?php echo $title; ?></a>
    </p>
</body>
</html>

