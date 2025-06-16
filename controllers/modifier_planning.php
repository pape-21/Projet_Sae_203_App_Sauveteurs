<?php
require_once 'models/planning.php';

$plannings = getAllPlanning();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_planning'];
    $datetime = $_POST['datetime_slot'];
    modifierPlanning($id, $datetime);
    header('Location: index.php?page=planning');
    exit;
}

require 'views/modifier_planning.php';
