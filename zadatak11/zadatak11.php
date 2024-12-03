<?php
// Funkcija za provjeru je li broj prost
function jeProst($broj) {
    if ($broj < 2) {
        return false; // Brojevi manji od 2 nisu prosti
    }
    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false; // Ako je djeljiv s bilo kojim brojem osim 1 i samim sobom
        }
    }
    return true;
}

// Ispis svih prostih brojeva manjih od 100
echo "<h1>Prosti brojevi manji od 100:</h1>";
echo "<ul>";
for ($i = 2; $i < 100; $i++) {
    if (jeProst($i)) {
        echo "<li>$i</li>";
    }
}
echo "</ul>";
?>
