<link rel='stylesheet' href='./objets/css/style.css'>
<div class='container'>
    <nav>
        <div class="nav-left">
            <a href='index.php?page=accueil'>Accueil</a>
            <a href='index.php?page=infos'>Infos générales</a>
            <a href='index.php?page=planning'>Voir le planning</a>
            <a href='index.php?page=sauveteur'>Gestion sauveteur</a>
            <?php if ($_SESSION['user']['profil'] === 'administration'): ?>
                <a href='index.php?page=admin'>Gestion</a>
            <?php endif; ?>
        </div>
        <div class="nav-right">
            <a href='index.php?page=logout'>Déconnexion</a>
        </div>
    </nav>
</div>
