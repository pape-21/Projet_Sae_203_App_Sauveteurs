<?php
function get_recent_planning() {
    $pdo = db_connect();
    $sql = "SELECT p.*, s.nom AS sauveteur_nom, s.prenom, m.nom AS mission, o.lieu, p.datetime_slot
            FROM planning p
            JOIN sauveteur s ON p.id_sauveteur = s.id_sauveteur
            JOIN mission m ON p.id_mission = m.id_mission
            JOIN operation o ON p.id_operation = o.id_operation
            WHERE p.datetime_slot >= NOW() - INTERVAL 1 DAY
            ORDER BY p.datetime_slot ASC";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}


function update_planning($id_planning, $date, $heure) {
    $pdo = db_connect();

    $datetime = $date . ' ' . $heure;
    $stmt = $pdo->prepare("UPDATE planning SET datetime_slot = ? WHERE id_planning = ?");
    $stmt->execute([$datetime, $id_planning]);
}











