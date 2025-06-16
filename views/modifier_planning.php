<?php include 'views/header.php'; ?>
<div class="container">
    <h2>Modifier un créneau</h2>
    <form method="POST">
        <label>Crenau :</label>
        <select name="id_planning" required>
            <?php foreach ($plannings as $p): ?>
                <option value="<?= $p['id_planning'] ?>"><?= $p['id_planning'] ?> - <?= $p['datetime_slot'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label>Nouvelle date et heure :</label>
        <input type="datetime-local" name="datetime_slot" required><br>

        <button type="submit">Modifier</button>
    </form>
</div>
<?php include 'views/footer.php'; ?>
