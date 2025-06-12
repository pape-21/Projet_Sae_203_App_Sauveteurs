<?php

try {
    switch ($page) {
        case 'login': 
            if (!file_exists('controllers/auth.php')) {
                throw new Exception('Le fichier auth.php est introuvable.');
            }
            require 'controllers/auth.php'; 
            break;

        case 'logout': 
            session_destroy(); 
            header('Location: index.php?page=login'); 
            break;

        case 'accueil': 
            if (!file_exists('controllers/accueil.php')) {
                throw new Exception('Le fichier accueil.php est introuvable.');
            }
            require 'controllers/accueil.php'; 
            break;

        case 'planning': 
            if (!file_exists('controllers/planning.php')) {
                throw new Exception('Le fichier planning.php est introuvable.');
            }
            require 'controllers/planning.php'; 
            break;

        case 'infos': 
            if (!file_exists('controllers/infos.php')) {
                throw new Exception('Le fichier infos.php est introuvable.');
            }
            require 'controllers/infos.php'; 
            break;

        case 'admin': 
            if (!file_exists('controllers/admin.php')) {
                throw new Exception('Le fichier admin.php est introuvable.');
            }
            require 'controllers/admin.php'; 
            break;

        default: 
            throw new Exception('Page non trouvée.');
    }
} catch (Exception $e) {
    // Afficher un message d'erreur détaillé
    echo '<strong>Erreur :</strong> ' . $e->getMessage();
    // Optionnel : Afficher la trace pour le débogage
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
