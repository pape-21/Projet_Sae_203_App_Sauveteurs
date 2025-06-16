<?php
require_once 'config/db.php';
function getPlanningById($db, $id) {
    // Récupère les détails du planning à modifier
    $query = $db->prepare("SELECT * FROM planning WHERE id_planning = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC); // Retourne les données sous forme de tableau associatif
}

function updatePlanning($db, $id, $datetime_slot, $affectation) {
    // Met à jour les informations du planning
    $query = $db->prepare("UPDATE planning SET datetime_slot = :datetime_slot, affectation = :affectation WHERE id_planning = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':datetime_slot', $datetime_slot, PDO::PARAM_STR);
    $query->bindParam(':affectation', $affectation, PDO::PARAM_STR);
    return $query->execute();
}
