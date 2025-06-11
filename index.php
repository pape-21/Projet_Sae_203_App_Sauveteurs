<?php
session_start();

// Inclure la configuration et la connexion à la base de données
require_once 'config/db.php';

// Inclure les modèles nécessaires
require_once 'models/Utilisateur.php';
require_once 'models/planning_models.php';

// Récupérer la page demandée via l'URL, par défaut 'accueil'
$page = $_GET['page'] ?? 'accueil';

// Récupérer le profil de l'utilisateur connecté (si connecté)
$profil = $_SESSION['profil'] ?? '';

var_dump($_SESSION);

switch ($page) {

    case 'accueil':
        // Page d'accueil, accessible uniquement si connecté
        if (!isset($_SESSION['id'])) {
            header('Location: index.php?page=accueil');
            exit;
        }
        require 'views/accueil.php';
        break;

    case 'login':
        // Page de connexion
        require 'controllers/AuthController.php';  // ton contrôleur pour la connexion
        break;

    case 'logout':
        // Déconnexion
        session_destroy();
        header('Location: index.php?page=login');
        exit;
        break;

    case 'planning':
        // Page planning : accessible uniquement si connecté
        if (!isset($_SESSION['id'])) {
            header('Location: index.php?page=login');
            exit;
        }
        $planningModel = new PlanningModel($pdo);
        $planning = $planningModel->getPlanning();
        require 'views/planning.php';
        break;

    case 'ajouter_sauveteur':
        if ($profil !== 'gestionnaire') {
            echo "Accès interdit.";
            exit;
        }
        // Gestion ajout sauveteur (formulaire + traitement)
        require 'controllers/SauveteurController.php';  // par exemple
        break;

    case 'modifier_planning':
        if ($profil !== 'gestionnaire') {
            echo "Accès interdit.";
            exit;
        }
        // Gestion modification planning
        require 'controllers/planning_ctrl.php';
        break;

    case 'supprimer_sauveteur':
        if ($profil !== 'gestionnaire') {
            echo "Accès interdit.";
            exit;
        }
        // Gestion suppression sauveteur
        require 'controllers/SauveteurController.php';
        break;

    default:
        echo "Page non trouvée.";
        break;
}
