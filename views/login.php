<link rel='stylesheet' href='assets/css/style.css'>
<div class='container'>
    <h2>Connexion</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method='post' action='index.php?page=login'>
        <label>Login : <input type='text' name='login' required></label><br>
        <label>Mot de passe : <input type='password' name='mot_de_passe' required></label><br>
        <input type='submit' value='Se connecter'>
    </form>
</div>
