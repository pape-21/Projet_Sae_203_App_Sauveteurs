<h2>Modifier le planning</h2>

<?php if (isset($message)): ?>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>

<?php if (!empty($plannings)): ?>
    <pre><?php print_r($plannings); ?></pre>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($plannings as $p): ?>
            <tr>
                <form method="POST" action="index.php?page=modifier_planning_action">
                    <td><?= htmlspecialchars($p['id']) ?></td>
                    <td><input type="date" name="date" value="<?= htmlspecialchars($p['date']) ?>"></td>
                    <td><input type="time" name="heure" value="<?= htmlspecialchars($p['heure']) ?>"></td>
                    <td><input type="text" name="nom" value="<?= htmlspecialchars($p['nom']) ?>"></td>
                    <td>
                        <input type="hidden" name="id" value="<?= $p['id'] ?>">
                        <input type="submit" value="Enregistrer">
                    </td>
                </form>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun planning disponible.</p>
<?php endif; ?>
