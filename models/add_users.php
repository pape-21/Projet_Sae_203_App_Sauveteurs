<?php
function ajouterUtilisateur($login, $password, $profil) {
    global $bdd;
    $stmt = $bdd->prepare("INSERT INTO utilisateurs (login, password, profil) VALUES (?, ?, ?)");
    $stmt->execute([$login, $password, $profil]);
}

function getProfils() {
    global $bdd;
    $stmt = $bdd->query("SELECT DISTINCT profil FROM utilisateurs");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}