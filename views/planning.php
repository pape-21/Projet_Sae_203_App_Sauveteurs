<link rel="stylesheet" href="assets/css/style.css">

<div class="container">
    <h2>Planning - 24 dernières heures</h2>

    <table border="1">
        <tr>
            <th>Sauveteur</th>
            <th>Prénom</th>
            <th>Mission</th>
            <th>Lieu</th>
            <th>Affectation</th>
            <th>Date</th>
        </tr>
        <?php foreach ($plannings as $p): ?>
            <?php
                $classe = 'affectation-' . strtolower(str_replace(' ', '-', $p['affectation']));
            ?>
            <tr class="<?= $classe ?>">
                <td><?= htmlspecialchars($p['sauveteur_nom']) ?></td>
                <td><?= htmlspecialchars($p['prenom']) ?></td>
                <td><?= htmlspecialchars($p['mission']) ?></td>
                <td><?= htmlspecialchars($p['lieu']) ?></td>
                <td><?= htmlspecialchars(ucfirst($p['affectation'])) ?></td>
                <td><?= htmlspecialchars($p['datetime_slot']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="legend">
        <h3>Légende des affectations</h3>
        <ul>
            <li class="affectation-disponible">Disponible</li>
            <li class="affectation-approche">En approche de la cavité</li>
            <li class="affectation-sous-terre">Sous terre</li>
            <li class="affectation-gestion">Équipe de gestion</li>
            <li class="affectation-exterieur">Mission à l'extérieur</li>
            <li class="affectation-repos">Repos</li>
            <li class="affectation-brancardage">Brancardage civière</li>
        </ul>
    </div>
</div>
