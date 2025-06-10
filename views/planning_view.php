<h2>Planning des sauveteurs</h2>
<div style="display: flex;">
  <table border="1">
    <thead>
      <tr>
        <th>Sauveteur</th>
        <!-- Colonnes horaires à générer dynamiquement -->
        <?php
        $heures = ["10:30", "11:00"]; // à étendre dynamiquement
        foreach ($heures as $heure) {
            echo "<th>$heure</th>";
        }
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($sauveteurs as $s) {
          echo "<tr><td>{$s['prenom']} {$s['nom']}</td>";
          foreach ($heures as $heure) {
              $found = false;
              foreach ($planning as $p) {
                  if ($p['id_sauveteur'] == $s['id_sauveteur'] && strpos($p['datetime_slot'], $heure) !== false) {
                      echo "<td style='background-color: {$p['couleur']}'>{$p['mission_nom']}</td>";
                      $found = true;
                      break;
                  }
              }
              if (!$found) echo "<td></td>";
          }
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <div style="margin-left: 20px;">
    <button>Modifier le planning</button><br><br>
    <button>Ajouter un sauveteur</button><br><br>
    <button>Supprimer un sauveteur</button>
  </div>
</div>
