<?php include 'views/header.php'; ?>
<div class="container">
    <h2>Modifier un sauveteur</h2>
    <form method="POST">
        <label>ID :</label>
        <select name="id_sauveteur">
            <?php foreach ($sauveteurs as $s): ?>
                <option value="<?= $s['id_sauveteur'] ?>"><?= $s['id_sauveteur'] ?> - <?= $s['nom'] ?> <?= $s['prenom'] ?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Nouveau nom :</label><input type="text" name="nom" required><br>
        <label>Nouveau prénom :</label><input type="text" name="prenom" required><br>
        <button type="submit">Modifier</button>
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
