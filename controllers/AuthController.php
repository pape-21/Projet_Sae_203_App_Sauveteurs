<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $mot_de_passe = $_POST['mot_de_passe'] ?? '';

    if (empty($login) || empty($mot_de_passe)) {
        header("Location: ../index.php?page=login&erreur=1");
        exit;
    }

    $sql = "SELECT * FROM utilisateur WHERE login = ? AND mot_de_passe = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login, $mot_de_passe]);
    $utilisateur = $stmt->fetch();

    if ($utilisateur) {
        $_SESSION['id'] = $utilisateur['id_utilisateur'];
        $_SESSION['nom'] = $utilisateur['login'];
        $_SESSION['profil'] = $utilisateur['profil'];
        header("Location: ../index.php?page=accueil");
        exit;
    } else {
        header("Location: ../index.php?page=login&erreur=1");
        exit;
    }
} else {
    header("Location: ../index.php?page=login");
    exit;
}
