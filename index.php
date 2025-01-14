<?php

include 'config/database.php';
include 'config/functions.php';

session_start();
if (isset($_SESSION['nastavnik'])) {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $korisnicko = $_POST['korisnicko'];
    $lozinka = $_POST['lozinka'];
    
    $stmt = $pdo->prepare("SELECT * FROM Nastavnik WHERE korisnicko = :korisnicko");
    $stmt->execute(['korisnicko' => $korisnicko]);
    $user = $stmt->fetch();

    if ($user && verifyPassword($lozinka, $user['lozinka'])) {
        $_SESSION['nastavnik'] = $user;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Pogrešan username ili lozinka.";
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
    <title>Akademija - Login</title>
</head>
<body>
    <div class="login-container">
        <img src="assets/logo.png" alt="Logo Akademije" class="logo">
        <form class="main" method="POST">
            <label for="korisnicko">Korisničko ime:</label>
            <input type="text" id="korisnicko" name="korisnicko" required>
            
            <label for="lozinka">Lozinka:</label>
            <input type="password" id="lozinka" name="lozinka" required>
            
            <button type="submit">Log In</button>

            <a class="button" href="signup.php">Sign Up</a>
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
