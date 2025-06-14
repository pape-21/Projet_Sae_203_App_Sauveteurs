<?php

require_once 'models/user.php';
if (!isset($_SESSION['user']) || $_SESSION['user']['profil'] !== 'administration') {
    header('Location: index.php?page=accueil');
    exit;
}
$utilisateurs = get_all_users();
require 'views/admin.php';
