<?php include 'views/header.php'; ?>
<link rel='stylesheet' href='objets/css/style.css'>
<div class='container'>
    <h2>Liste des comptes utilisateur</h2>
    <table border='1'>
        <tr><th>Login</th><th>Profil</th></tr>
        <?php foreach ($utilisateurs as $u): ?>
        <tr>
            <td><?= htmlspecialchars($u['login']) ?></td>
            <td><?= htmlspecialchars($u['profil']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>


<?php require 'views/footer.php'; ?>


<div class="action-buttons">
    <a href="index.php?page=ajouter_utilisateur" class="btn mouton">Ajouter un utilisateur</a>
    <a href="index.php?page=supprimer_utilisateur" class="btn mouton">Supprimer un utilisateur</a>
</div>
<?php if ($_SESSION['user']['profil'] === 'administration'): ?>
    <div class="action-buttons">
        <a href="index.php?page=modifier_utilisateur" class="btn mouton">Modifier un utilisateur</a>
    </div>
<?php endif; ?>