<?php
// The front root controller

// SEULEMENT en phase de développement !
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);

// Route principale (route ou action ?)
$route = $_GET['route'] ?? null;
$action = $_GET['action'] ?? null;

if ($route) {
    switch ($route) {
        case "login":
            require('controllers/logincontrollers.php');
            gestion_methode_requete();
            break;

        default:
            if (file_exists('views/404_view.php')) {
                require('views/404_view.php');
            } else {
                echo "<h1>Erreur 404</h1><p>Page non trouvée</p>";
            }
            break;
    }

} elseif ($action) {
    require_once("controllers/planning_ctlr.php");

    switch ($action) {
        case 'planning':
            afficherPlanning();
            break;

        default:
            if (file_exists('views/404_view.php')) {
                require('views/404_view.php');
            } else {
                echo "<h1>Erreur 404</h1><p>Page non trouvée</p>";
            }
            break;
    }

} else {
    // Par défaut on affiche le planning
    require_once("controllers/planning_ctlr.php");
    afficherPlanning();
}
