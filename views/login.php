<link rel='stylesheet' href='./objets/css/style.css'>

<div class='container'>
    <h2>Connexion</h2>
    <?php if (!empty($error)): ?>
        <p class='error'><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method='post' action='index.php?page=login'>
        <label for='login'>Login :</label><br>
        <input type='text' id='login' name='login' required><br><br>

        <label for='mot_de_passe'>Mot de passe :</label><br>
        <input type='password' id='mot_de_passe' name='mot_de_passe' required><br><br>

        <input type='submit' value='Se connecter'>
    </form>
</div>

<?php require 'views/footer.php'; ?>