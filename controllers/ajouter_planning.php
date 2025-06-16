<?php
require_once 'models/planning.php';

$sauveteurs = getAllSauveteurs();
$missions = getAllMissions();
$operations = getAllOperations();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sauveteur = $_POST['id_sauveteur'];
    $mission = $_POST['id_mission'];
    $operation = $_POST['id_operation'];
    $datetime = $_POST['datetime_slot'];

    ajouterPlanning($sauveteur, $mission, $operation, $datetime);
    header('Location: index.php?page=planning');
    exit;
}

require 'views/ajouter_planning.php';
