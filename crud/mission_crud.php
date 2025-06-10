<?php
require_once("config/config.php");

// Récupère toutes les missions
function getToutesLesMissions() {
    $conn = getConnexion();
    $sql = "SELECT * FROM mission ORDER BY id_mission";
    return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// Récupère une mission par ID
function getMissionById($id) {
    $conn = getConnexion();
    $stmt = $conn->prepare("SELECT * FROM mission WHERE id_mission = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Ajoute une mission
function ajouterMission($nom, $description, $couleur) {
    $conn = getConnexion();
    $stmt = $conn->prepare("INSERT INTO mission (nom, description, couleur) VALUES (?, ?, ?)");
    return $stmt->execute([$nom, $description, $couleur]);
}

// Supprime une mission
function supprimerMission($id) {
    $conn = getConnexion();
    $stmt = $conn->prepare("DELETE FROM mission WHERE id_mission = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    return $stmt->execute();
}
