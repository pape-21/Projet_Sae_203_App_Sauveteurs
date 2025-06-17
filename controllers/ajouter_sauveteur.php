<?php
require_once 'models/sauveteur.php';

if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $departement = $_POST['departement'];
    $specialite = $_POST['specialite'];
    $engagement_datetime = $_POST['engagement_datetime'];
    $contact = !empty($_POST['contact']) ? $_POST['contact'] : null;

    ajouter_sauveteur($nom, $prenom, $departement, $specialite, $engagement_datetime, $contact);
    header('Location: index.php?page=sauveteur');
    exit;
}

$sauveteurs = get_all_sauveteurs();
require 'views/ajouter_sauveteur.php';
