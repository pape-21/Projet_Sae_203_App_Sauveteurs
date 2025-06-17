<?php
require_once 'config/db.php';

function getAllSauveteurs() {
    $pdo = db_connect();
    $stmt = $pdo->query("SELECT * FROM sauveteur");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function ajouter_sauveteur($nom, $prenom, $departement, $specialite, $engagement_datetime, $contact = null) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("INSERT INTO sauveteur (nom, prenom, departement, specialite, engagement_datetime, contact) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $departement, $specialite, $engagement_datetime, $contact]);
}


function modifier_sauveteur($id, $nom, $prenom, $departement, $specialite, $engagement_datetime, $contact = null) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("UPDATE sauveteur SET nom = ?, prenom = ?, departement = ?, specialite = ?, engagement_datetime = ?, contact = ? WHERE id_sauveteur = ?");
    $stmt->execute([$nom, $prenom, $departement, $specialite, $engagement_datetime, $contact, $id]);
}

function supprimerSauveteur($id) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("DELETE FROM sauveteur WHERE id_sauveteur = ?");
    $stmt->execute([$id]);
}
function get_all_sauveteurs() {
    $pdo = db_connect();
    $stmt = $pdo->query("SELECT * FROM sauveteur");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
