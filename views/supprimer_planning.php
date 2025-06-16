<?php include 'views/header.php'; ?>
<div class="container">
    <h2>Supprimer un créneau</h2>
    <form method="POST">
        <label>Crenau :</label>
        <select name="id_planning" required>
            <?php foreach ($plannings as $p): ?>
                <option value="<?= $p['id_planning'] ?>"><?= $p['id_planning'] ?> - <?= $p['datetime_slot'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <button type="submit">Supprimer</button>
    </form>
</div>
<?php include 'views/footer.php'; ?>
