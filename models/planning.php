<?php
require_once 'config/db.php';

function getAllSauveteurs() {
    $pdo = db_connect();
    return $pdo->query("SELECT id_sauveteur, nom, prenom FROM sauveteur")->fetchAll(PDO::FETCH_ASSOC);
}

function getAllMissions() {
    $pdo = db_connect();
    return $pdo->query("SELECT id_mission, nom FROM mission")->fetchAll(PDO::FETCH_ASSOC);
}

function getAllOperations() {
    $pdo = db_connect();
    return $pdo->query("SELECT id_operation, lieu FROM operation")->fetchAll(PDO::FETCH_ASSOC);
}

function ajouterPlanning($id_sauveteur, $id_mission, $id_operation, $datetime) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("INSERT INTO planning (id_sauveteur, id_mission, id_operation, datetime_slot) VALUES (?, ?, ?, ?)");
    $stmt->execute([$id_sauveteur, $id_mission, $id_operation, $datetime]);
}

function getAllPlanning() {
    $pdo = db_connect();
    return $pdo->query("SELECT id_planning, datetime_slot FROM planning")->fetchAll(PDO::FETCH_ASSOC);
}

function modifierPlanning($id_planning, $datetime) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("UPDATE planning SET datetime_slot = ? WHERE id_planning = ?");
    $stmt->execute([$datetime, $id_planning]);
}

function supprimerPlanning($id_planning) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("DELETE FROM planning WHERE id_planning = ?");
    $stmt->execute([$id_planning]);
}

// ✅ Fonction manquante à ajouter
function get_recent_planning() {
    $pdo = db_connect();
    $sql = "SELECT p.*, s.nom AS sauveteur_nom, s.prenom, m.nom AS mission, o.lieu, p.datetime_slot, p.affectation
            FROM planning p
            JOIN sauveteur s ON p.id_sauveteur = s.id_sauveteur
            JOIN mission m ON p.id_mission = m.id_mission
            JOIN operation o ON p.id_operation = o.id_operation
            WHERE p.datetime_slot >= NOW() - INTERVAL 1 DAY
            ORDER BY p.datetime_slot ASC";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
