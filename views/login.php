<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="login-container">
        <form method="post" action="../controllers/loginController.php">
            <h2>Connexion</h2>
            <label>Nom d'utilisateur</label>
            <input type="text" name="username" required>

            <label>Mot de passe</label>
            <input type="password" name="password" required>

            <button type="submit">Connexion</button>
        </form>
    </div>
</body>
</html>
