<?php
require_once("config/config.php");

function afficherPlanning() {
    require_once("crud/planning_crud.php");
    require_once("crud/sauveteur_crud.php");
    require_once("crud/mission_crud.php");

    $planning = getPlanningComplet(); // jointures nécessaires
    $sauveteurs = getTousLesSauveteurs();
    $missions = getToutesLesMissions();

    include("views/planning_view.php");
}
