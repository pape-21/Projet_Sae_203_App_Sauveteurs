<?php require 'views/header.php'; ?>

<div class="container">
    <h2>Ajouter un sauveteur</h2>


<form method="post" action="index.php?page=ajouter_sauveteur">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" required><br>

    <label for="departement">Département :</label>
    <input type="text" name="departement" maxlength="3" required><br>

    <label for="specialite">Spécialité :</label>
    <input type="text" name="specialite" required><br>

    <label for="engagement_datetime">Date et heure d'engagement :</label>
    <input type="datetime-local" name="engagement_datetime" required><br>

    <label for="contact">Contact (facultatif) :</label>
    <input type="text" name="contact"><br>

    <button type="submit">Ajouter</button>
</form>


    <hr>

    <h3>Sauveteurs existants</h3>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Contact</th>
        </tr>
        <?php foreach ($sauveteurs as $s): ?>
            <tr>
                <td><?= htmlspecialchars($s['nom']) ?></td>
                <td><?= htmlspecialchars($s['prenom']) ?></td>
                <td><?= htmlspecialchars($s['contact'] ?? 'Non renseigné') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require 'views/footer.php'; ?>
