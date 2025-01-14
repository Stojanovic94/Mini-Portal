<?php

include 'config/database.php';

$stmt = $pdo->prepare("DELETE FROM Aktivnost WHERE id = :id");
$stmt->execute(['id' => $_GET['id']]);
header("Location: dashboard.php");

?>
