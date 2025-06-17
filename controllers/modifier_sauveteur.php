<?php
require_once 'models/sauveteur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    modifierSauveteur($_POST['id_sauveteur'], $_POST['nom'], $_POST['prenom']);
    header('Location: index.php?page=planning');
    exit;
}

$sauveteurs = getAllSauveteurs();
require 'views/modifier_sauveteur.php';
