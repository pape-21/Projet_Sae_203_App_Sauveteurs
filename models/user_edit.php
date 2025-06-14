<?php
require_once('config/db.php');

function getAllUtilisateurs() {
    $pdo = db_connect();
    $stmt = $pdo->query("SELECT login FROM utilisateur");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProfils() {
    $pdo = db_connect();
    $stmt = $pdo->query("SELECT DISTINCT profil FROM utilisateur");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function modifierProfilUtilisateur($login, $newProfil) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("UPDATE utilisateur SET profil = ? WHERE login = ?");
    $stmt->execute([$newProfil, $login]);
}

function supprimerUtilisateur($login) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("DELETE FROM utilisateur WHERE login = ?");
    $stmt->execute([$login]);
}
