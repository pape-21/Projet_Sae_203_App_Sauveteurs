<?php
#session_start();

require_once 'models/user.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $mdp = $_POST['mot_de_passe'] ?? '';
    $user = get_user($login, $mdp);
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: index.php?page=accueil');
        exit;
    } else {
        $error = 'Identifiants invalides';
    }
}
require 'views/login.php';
