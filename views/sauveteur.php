<!-- views/sauveteur.php -->

<?php require 'views/header.php'; ?>

<link rel="stylesheet" href="./objets/css/style.css">

<div class="container">
    <h2>Gestion des sauveteurs</h2>

    <div class="action-buttons">
        <a href="index.php?page=ajouter_sauveteur" class="btn mouton">Ajouter un sauveteur</a>
        <a href="index.php?page=modifier_sauveteur" class="btn mouton">Modifier un sauveteur</a>
        <a href="index.php?page=supprimer_sauveteur" class="btn mouton">Supprimer un sauveteur</a>
    </div>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Contact</th>
        </tr>
        <?php foreach ($sauveteurs as $s): ?>
        <tr>
            <td><?= htmlspecialchars($s['nom']) ?></td>
            <td><?= htmlspecialchars($s['prenom']) ?></td>
            <td><?= htmlspecialchars($s['contact']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require 'views/footer.php'; ?>
