<?php
include 'db_connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = intval($_GET['id']);

    // Dohvati podatke korisnika
    $sql_user = "SELECT * FROM korisnici WHERE id = ?";
    $stmt = $conn->prepare($sql_user);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $user_result = $stmt->get_result();
    $user = $user_result->fetch_assoc();

    // Dohvati sve države
    $sql_countries = "SELECT * FROM countries";
    $countries_result = $conn->query($sql_countries);

    if ($user) {
        ?>
        <h1>Uredi korisnika</h1>
        <form action="update_user.php" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <label for="name">Ime:</label><br>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required><br><br>

            <label for="lastname">Prezime:</label><br>
            <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($user['lastname']); ?>" required><br><br>

            <label for="country">Država:</label><br>
            <select id="country" name="country_id" required>
                <?php
                while ($country = $countries_result->fetch_assoc()) {
                    echo "<option value='" . $country['id'] . "'" . ($country['id'] == $user['country_id'] ? " selected" : "") . ">" . htmlspecialchars($country['name']) . "</option>";
                }
                ?>
            </select><br><br>

            <button type="submit">Spremi promjene</button>
        </form>
        <?php
    } else {
        echo "Korisnik nije pronađen.";
    }
} else {
    echo "Nevažeći ID korisnika.";
}

$conn->close();
?>
