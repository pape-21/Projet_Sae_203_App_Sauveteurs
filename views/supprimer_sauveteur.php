<?php include 'views/header.php'; ?>
<div class="container">
    <h2>Supprimer un sauveteur</h2>
    <form method="POST">
        <label>ID à supprimer :</label>
        <select name="id_sauveteur">
            <?php foreach ($sauveteurs as $s): ?>
                <option value="<?= $s['id_sauveteur'] ?>"><?= $s['id_sauveteur'] ?> - <?= $s['nom'] ?> <?= $s['prenom'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit">Supprimer</button>
    </form>
    <h3>Liste des sauveteurs</h3>
    <table border="1">
        <tr><th>ID</th><th>Nom</th><th>Prénom</th></tr>
        <?php foreach ($sauveteurs as $s): ?>
        <tr>
            <td><?= htmlspecialchars($s['id_sauveteur']) ?></td>
            <td><?= htmlspecialchars($s['nom']) ?></td>
            <td><?= htmlspecialchars($s['prenom']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php include 'views/footer.php'; ?>
