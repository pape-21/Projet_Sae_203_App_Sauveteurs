<?php include 'views/header.php'; ?>

<div class="container">
  <h2>Supprimer un utilisateur</h2>
  <form method="POST">
    <label for="login">Login :</label>
    <select name="login" required>
      <?php foreach ($utilisateurs as $u): ?>
        <option value="<?= htmlspecialchars($u['login']) ?>"><?= htmlspecialchars($u['login']) ?></option>
      <?php endforeach; ?>
    </select><br>

    <button type="submit">Supprimer</button>
  </form>
</div>

<?php include 'views/footer.php'; ?>
