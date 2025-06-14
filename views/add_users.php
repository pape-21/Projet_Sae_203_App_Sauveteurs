<?php include 'views/header.php'; ?>

<div class="container">
  <h2>Ajouter un utilisateur</h2>
  <form method="POST" action="index.php?page=ajouter_utilisateur">
    <label for="login">Login :</label>
    <input type="text" id="login" name="login" required><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br>

    <label for="profil">Profil :</label>
    <select id="profil" name="profil" required>
      <?php foreach ($profils as $p): ?>
        <option value="<?= htmlspecialchars($p['profil']) ?>"><?= htmlspecialchars($p['profil']) ?></option>
      <?php endforeach; ?>
    </select><br>

    <button type="submit">Ajouter</button>
  </form>
</div>
<?php include 'views/footer.php'; ?>
