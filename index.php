<?php
// Activer les erreurs pour le développement

if (isset($_SESSION['user'])) {
    echo "DEBUG SESSION : Connexion OK avec utilisateur : " . $_SESSION['user']['login'] . "<br>";
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Charger la base de données
require_once 'config/db.php';

// Récupérer la page demandée (par défaut : login)
$page = $_GET['page'] ?? 'login';

try {
    switch ($page) {
        case 'login':
            require 'controllers/auth.php';
            break;

        case 'logout':
            session_destroy();
            header('Location: index.php?page=login');
            exit;

        case 'accueil':
            require 'controllers/accueil.php';
            break;

        case 'planning':
            require 'controllers/planning.php';
            break;

        case 'infos':
            require 'controllers/infos.php';
            break;

        case 'admin':
            require 'controllers/admin.php';
            break;
        
        case 'ajouter_utilisateur':
            require 'controllers/add_users.php';
            break;
        
        
        
        case 'modifier_utilisateur':
            require 'controllers/modifier_utilisateur.php';
            break;
            
        case 'supprimer_utilisateur':
            require 'controllers/supprimer_utilisateur.php';
            break;
    
        case 'ajouter_planning':
            require 'controllers/ajouter_planning.php';
            break;
            
        case 'modifier_planning':
            require 'controllers/modifier_planning.php';
            break;
            
        case 'supprimer_planning':
            require 'controllers/supprimer_planning.php';
            break;
                
        case 'ajouter_sauveteur':
            require 'controllers/ajouter_sauveteur.php';
            break;
            
        case 'modifier_sauveteur':
            require 'controllers/modifier_sauveteur.php';
            break;
            
        case 'supprimer_sauveteur':
            require 'controllers/supprimer_sauveteur.php';
            break;
        

        case 'sauveteur':
        require 'controllers/sauveteur.php';
        break;
                

        default:
            throw new Exception("Page non trouvée : $page");
    }

} catch (Exception $e) {
    echo "<h2>Erreur</h2>";
    echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";
    // Tu peux ajouter ici un include vers une page d'erreur stylée
}
