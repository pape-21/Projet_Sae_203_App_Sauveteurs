<?php
include 'views/header.php';
?>

<link rel='stylesheet' href='./objets/css/style.css'>
<div class='container'>
    <h2>Infos générales - Sauveteurs</h2>
    <table border='1'>
        <tr><th>Nom</th><th>Prénom</th><th>Département</th><th>Spécialité</th><th>Date engagement</th></tr>
        <?php foreach ($sauveteurs as $s): ?>
        <tr>
            <td><?= htmlspecialchars($s['nom']) ?></td>
            <td><?= htmlspecialchars($s['prenom']) ?></td>
            <td><?= htmlspecialchars($s['departement']) ?></td>
            <td><?= htmlspecialchars($s['specialite']) ?></td>
            <td><?= $s['engagement_datetime'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require 'views/footer.php'; ?>