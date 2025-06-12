<link rel='stylesheet' href='assets/css/style.css'>
<div class='container'>
    <h2>Gestion des comptes</h2>
    <table border='1'>
        <tr><th>Login</th><th>Profil</th></tr>
        <?php foreach ($utilisateurs as $u): ?>
        <tr>
            <td><?= htmlspecialchars($u['login']) ?></td>
            <td><?= htmlspecialchars($u['profil']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
