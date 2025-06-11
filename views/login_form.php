<?php
session_start();
$erreur = $_GET['erreur'] ?? '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>

        <?php if ($erreur): ?>
            <p class="erreur"><?= htmlspecialchars($erreur) ?></p>
        <?php endif; ?>

        <form action="../controllers/AuthController.php" method="post">
            <label for="login">Login :</label>
            <input type="text" id="login" name="login" required>

            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>

            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
