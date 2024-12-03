<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = intval($_POST['id']);
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $country_id = intval($_POST['country_id']);

    // Ažuriranje korisnika
    $sql_update = "UPDATE users SET name = ?, lastname = ?, country_id = ? WHERE id = ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("ssii", $name, $lastname, $country_id, $user_id);

    if ($stmt->execute()) {
        echo "Korisnik je uspješno ažuriran.";
        header("Location: index.php"); // Preusmjeri natrag na popis korisnika
        exit();
    } else {
        echo "Došlo je do pogreške prilikom ažuriranja korisnika.";
    }

    $stmt->close();
}

$conn->close();
?>
