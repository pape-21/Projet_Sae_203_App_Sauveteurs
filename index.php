<?php
    //The front root controller

    //SEULEMENT en phase de développement !
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    ini_set('display_errors', 1);
    
    //The requested route
    $route = null;
    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    }
    
    //We switch to the good controller
    switch ($route) {
        case null:

            require('views/login.php');
            break;
            
        
        default:
            require('views/404_view.php');
            break;
            
    }
