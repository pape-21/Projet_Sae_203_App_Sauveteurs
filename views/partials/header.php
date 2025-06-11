<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION)) session_start();
?>

<header>
    <nav class="menu">
        <a href="/dev/Projet_Sae_203_App_Sauveteurs/views/accueil.php">Accueil</a>

        <?php if ($_SESSION['profil'] === 'gestionnaire' || $_SESSION['profil'] === 'administration'): ?>
            <a href="/dev/Projet_Sae_203_App_Sauveteurs/views/sauveteurs.php">Sauveteurs</a>
            <a href="/dev/Projet_Sae_203_App_Sauveteurs/views/planning.php">Planning</a>
        <?php endif; ?>

        <?php if (in_array($_SESSION['profil'], ['lecture', 'gestionnaire', 'administration'])): ?>
            <a href="/dev/Projet_Sae_203_App_Sauveteurs/views/recapitulatif.php">Récapitulatif</a>
        <?php endif; ?>

        <?php if ($_SESSION['profil'] === 'administration'): ?>
            <a href="/dev/Projet_Sae_203_App_Sauveteurs/views/admin_users.php">Administration</a>
        <?php endif; ?>

        <a href="/dev/Projet_Sae_203_App_Sauveteurs/logout.php">Déconnexion</a>
    </nav>
</header>
