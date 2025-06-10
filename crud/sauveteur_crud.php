<?php
require_once("config/config.php");

// Récupère tous les sauveteurs
function getTousLesSauveteurs() {
    $conn = getConnexion();
    $sql = "SELECT * FROM sauveteur ORDER BY nom, prenom";
    return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// Récupère un sauveteur par ID
function getSauveteurById($id) {
    $conn = getConnexion();
    $stmt = $conn->prepare("SELECT * FROM sauveteur WHERE id_sauveteur = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Ajoute un sauveteur
function ajouterSauveteur($nom, $prenom, $departement, $specialite, $engagement) {
    $conn = getConnexion();
    $stmt = $conn->prepare("INSERT INTO sauveteur (nom, prenom, departement, specialite, engagement_datetime) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$nom, $prenom, $departement, $specialite, $engagement]);
}

// Supprime un sauveteur
function supprimerSauveteur($id) {
    $conn = getConnexion();
    $stmt = $conn->prepare("DELETE FROM sauveteur WHERE id_sauveteur = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    return $stmt->execute();
}
