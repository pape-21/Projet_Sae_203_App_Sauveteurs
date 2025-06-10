<?php
require_once(__DIR__ . "/../config/config.php");

function getPlanningComplet() {
    try {
        $conn = getConnexion();
        $sql = "SELECT p.*, s.nom, s.prenom, m.nom AS mission_nom, m.couleur
                FROM planning p
                JOIN sauveteur s ON p.id_sauveteur = s.id_sauveteur
                JOIN mission m ON p.id_mission = m.id_mission
                ORDER BY p.datetime_slot";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$result) {
            throw new Exception("Aucun planning trouvé.");
        }

        return $result;
    } catch (Exception $e) {
        error_log("Erreur dans getPlanningComplet : " . $e->getMessage());
        return [];
    }
}
