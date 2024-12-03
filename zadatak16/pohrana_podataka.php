<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'db_connect.php'; // Povezivanje na bazu podataka
    
    // Prikupljanje podataka iz forme
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashiranje lozinke
    $country = $conn->real_escape_string($_POST['country']);
    
    // SQL upit za umetanje podataka u tablicu
    $sql = "INSERT INTO users (name, lastname, email, username, password, country_code)
            VALUES ('$first_name', '$last_name', '$email', '$username', '$password', '$country')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p>Registracija uspješna!</p>";
    } else {
        echo "<p>Greška: " . $conn->error . "</p>";
    }
    
    $conn->close();
}
?>
