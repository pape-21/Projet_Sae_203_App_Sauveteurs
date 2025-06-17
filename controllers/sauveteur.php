<?php
require_once 'models/sauveteur.php';

if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit;
}

$sauveteurs = get_all_sauveteurs();

require 'views/sauveteur.php';
