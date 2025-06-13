<link rel='stylesheet' href='./objets/css/style.css'>
<div class='container'>
    <nav>
        <a href='index.php?page=accueil'>Accueil</a>
        <a href='index.php?page=infos'>Infos générales</a>
        <a href='index.php?page=planning'>Voir le planning</a>
        <?php if ($_SESSION['user']['profil'] === 'administration'): ?>
            <a href='index.php?page=admin'>Gestion</a>
        <?php endif; ?>
        <a href='index.php?page=logout'>Déconnexion</a>
    </nav>
</div>