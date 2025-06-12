<?php

// Activer le rapport d'erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$page = $_GET['page'] ?? 'login';
require_once 'config/db.php';
require_once 'controllers/router.php';
