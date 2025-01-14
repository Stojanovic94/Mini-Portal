<?php

session_start();
if (isset($_SESSION['nastavnik'])) {
    unset($_SESSION['nastavnik']);
    header("Location: index.php");
}

?>
