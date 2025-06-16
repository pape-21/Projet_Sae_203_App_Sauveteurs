<?php
require_once 'models/planning_crud.php';

$plannings = getAllPlanning();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_planning'];
    supprimerPlanning($id);
    header('Location: index.php?page=planning');
    exit;
}

require 'views/supprimer_planning.php';
