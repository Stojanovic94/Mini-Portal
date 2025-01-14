<?php

include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Podaci o vlasniku
    $nastavnik = $_POST['nastavnik'];
    $predmet = $_POST['predmet'];
    $studijski_program = $_POST['studijski_program'];
    $tip_obaveze = $_POST['tip_obaveze'];
    $datum_vreme = date('Y-m-d H:i:s');
    $broj_prijavljenih = $_POST['broj_prijavljenih'];

    try {
        // Pokretanje transakcije
        $pdo->beginTransaction();
        
        // Unos podataka o vlasniku
        $stmtVlasnik = $pdo->prepare("INSERT INTO Aktivnost (nastavnik, predmet, studijski_program, tip_obaveze, datum_vreme, broj_prijavljenih) VALUES (:nastavnik, :predmet, :studijski_program, :tip_obaveze, :datum_vreme, :broj_prijavljenih)");
        $stmtVlasnik->execute([
            'nastavnik' => $nastavnik,
            'predmet' => $predmet,
            'studijski_program' => $studijski_program,
            'tip_obaveze' => $tip_obaveze,
            'datum_vreme' => $datum_vreme,
            'broj_prijavljenih' => $broj_prijavljenih
        ]);

        // Potvrda transakcije
        $pdo->commit();

        // Preusmeravanje na logovanje
        header('Location: dashboard.php');
        exit;
    } catch (Exception $e) {
        // Otkazivanje transakcije u slučaju greške
        $pdo->rollBack();
        die("Došlo je do greške: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <title>Dodaj aktivnost</title>
</head>
<body>
    <div class="signup-container">
        <form method="POST">
            <label for="nastavnik">Nastavnik:</label>
            <input type="text" id="nastavnik" name="nastavnik" required>
            
            <label for="predmet">Predmet:</label>
            <input type="text" id="predmet" name="predmet" required>
            
            <label for="studijski_program">Studijski program:</label>
            <input type="text" id="studijski_program" name="studijski_program" required>
            
            <label for="tip_obaveze">Tip obaveze:</label>
            <input type="text" id="tip_obaveze" name="tip_obaveze" required>

            <label for="broj_prijavljenih">Broj prijavljenih:</label>
            <input type="number" id="broj_prijavljenih" name="broj_prijavljenih" required>
            
            <button type="submit">OK</button>
            <button type="reset">Cancel</button>
        </form>
    </div>
    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date("Y"); ?> Nikola Stojanović, Filip Stojanović, Rade Krstić.</p>
            <p>Kontaktirajte nas na: <a href="mailto:its0923@atvssnis.edu.rs">its0923@atvssnis.edu.rs</a></p>
        </div>
    </footer>
</body>
</html>
