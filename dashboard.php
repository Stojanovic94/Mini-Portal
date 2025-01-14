<?php

include 'config/database.php';

session_start();
if (!isset($_SESSION['nastavnik'])) {
    header("Location: index.php");
    exit;
}

$nastavnik = $_SESSION['nastavnik']['korisnicko'];
$query = "SELECT * FROM Aktivnost WHERE nastavnik = :nastavnik";

if (isset($_POST['sortiraj']))
    $query .= " ORDER BY datum_vreme DESC";

$stmt = $pdo->prepare($query);
$stmt->execute(['nastavnik' => $nastavnik]);
$aktivnosti = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dobrodošli, <?= $_SESSION['nastavnik']['puno_ime']; ?>!</h1>
    <a href="logout.php" class="logout-btn">Odjava</a>
    <table>
        <thead>
            <tr>
                <th>Nastavnik</th>
                <th>Predmet</th>
                <th>Program</th>
                <th>Tip obaveze</th>
                <th>Datum i vreme</th>
                <th>Prijavljeni studenti</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aktivnosti as $aktivnost): ?>
                <tr>
                    <td><?= $aktivnost['nastavnik']; ?></td>
                    <td><?= $aktivnost['predmet']; ?></td>
                    <td><?= $aktivnost['studijski_program']; ?></td>
                    <td><?= $aktivnost['tip_obaveze']; ?></td>
                    <td><?= $aktivnost['datum_vreme']; ?></td>
                    <td><?= $aktivnost['broj_prijavljenih']; ?></td>
                    <td><a href="delete.php?id=<?= $aktivnost['id'] ?>">delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form method="POST">
        <input type="hidden" name="sortiraj" value="true"> 
        <button type="submit">Sortiraj</button>
    </form>
    <a href="dodaj.php" class="logout-btn">Dodaj</a>
    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date("Y"); ?> Nikola Stojanović, Filip Stojanović, Rade Krstić.</p>
            <p>Kontaktirajte nas na: <a href="mailto:its0923@atvssnis.edu.rs">its0923@atvssnis.edu.rs</a></p>
        </div>
    </footer>
</body>
</html>
