<?php
require_once('config/db.php');

function ajouterUtilisateur($login, $password, $profil) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("INSERT INTO utilisateur (login, mot_de_passe, profil) VALUES (?, ?, ?)");
    $stmt->execute([$login, $password, $profil]);
}

function getProfils() {
    $pdo = db_connect();
    $stmt = $pdo->query("SELECT DISTINCT profil FROM utilisateur");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
