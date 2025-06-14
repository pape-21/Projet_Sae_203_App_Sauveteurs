<?php include 'views/header.php'; ?>

<div class="container">
  <h2>Modifier un utilisateur</h2>
  <form method="POST">
    <label for="login">Login :</label>
    <select name="login" required>
      <?php foreach ($utilisateurs as $u): ?>
        <option value="<?= htmlspecialchars($u['login']) ?>"><?= htmlspecialchars($u['login']) ?></option>
      <?php endforeach; ?>
    </select><br>

    <label for="new_profil">Nouveau profil :</label>
    <select name="new_profil" required>
      <?php foreach ($profils as $p): ?>
        <option value="<?= htmlspecialchars($p['profil']) ?>"><?= htmlspecialchars($p['profil']) ?></option>
      <?php endforeach; ?>
    </select><br>

    <button type="submit">Modifier</button>
  </form>
</div>

<?php include 'views/footer.php'; ?>
