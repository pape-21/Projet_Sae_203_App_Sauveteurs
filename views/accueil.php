<link rel='stylesheet' href='assets/css/style.css'>
<div class='container'>
    <h2>Bienvenue <?= htmlspecialchars($_SESSION['user']['login']) ?></h2>
    <nav>
        <a href='index.php?page=infos'>Infos générales</a>
        <a href='index.php?page=planning'>Voir le planning</a>
        <?php if ($_SESSION['user']['profil'] === 'administration'): ?>
            <a href='index.php?page=admin'>Administration</a>
        <?php endif; ?>
        <a href='index.php?page=logout'>Déconnexion</a>
    </nav>
</div>
