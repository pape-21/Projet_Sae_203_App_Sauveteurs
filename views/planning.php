<link rel='stylesheet' href='assets/css/style.css'>
<div class='container'>
    <h2>Planning - 24 dernières heures</h2>
    <table border='1'><tr>
        <th>Sauveteur</th><th>Prénom</th><th>Mission</th><th>Lieu</th><th>Date</th>
    </tr>
    <?php foreach ($plannings as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['sauveteur_nom']) ?></td>
            <td><?= htmlspecialchars($p['prenom']) ?></td>
            <td><?= htmlspecialchars($p['mission']) ?></td>
            <td><?= htmlspecialchars($p['lieu']) ?></td>
            <td><?= $p['datetime_slot'] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
