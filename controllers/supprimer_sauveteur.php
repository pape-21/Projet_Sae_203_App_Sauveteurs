<?php
require_once 'models/sauveteur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    supprimerSauveteur($_POST['id_sauveteur']);
    header('Location: index.php?page=planning');
    exit;
}

$sauveteurs = getAllSauveteurs();
require 'views/supprimer_sauveteur.php';
