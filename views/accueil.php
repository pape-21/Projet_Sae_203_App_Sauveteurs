<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login_form.php");
    exit;
}
include 'partials/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenue <?= htmlspecialchars($_SESSION['nom']) ?> !</h1>
        <p>Vous êtes connecté en tant que <strong><?= htmlspecialchars($_SESSION['profil']) ?></strong>.</p>
    </div>
</body>
</html>
