<?php include 'views/header.php'; ?>
<div class="container">
    <h2>Ajouter un créneau de planning</h2>
    <form method="POST">
        <label>Sauveteur :</label>
        <select name="id_sauveteur" required>
            <?php foreach ($sauveteurs as $s): ?>
                <option value="<?= $s['id_sauveteur'] ?>"><?= $s['nom'] ?> <?= $s['prenom'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Mission :</label>
        <select name="id_mission" required>
            <?php foreach ($missions as $m): ?>
                <option value="<?= $m['id_mission'] ?>"><?= $m['nom'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Opération :</label>
        <select name="id_operation" required>
            <?php foreach ($operations as $o): ?>
                <option value="<?= $o['id_operation'] ?>"><?= $o['lieu'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Date et heure :</label>
        <input type="datetime-local" name="datetime_slot" required><br>

        <button type="submit">Ajouter</button>
    </form>
</div>
<?php include 'views/footer.php'; ?>
