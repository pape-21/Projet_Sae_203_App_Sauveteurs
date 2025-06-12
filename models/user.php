<?php
require_once 'config/db.php';
function get_user($login, $mdp) {
    $pdo = db_connect();
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE login = ? AND mot_de_passe = ?");
    $stmt->execute([$login, $mdp]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function get_all_users() {
    $pdo = db_connect();
    return $pdo->query("SELECT * FROM utilisateur")->fetchAll(PDO::FETCH_ASSOC);
}
