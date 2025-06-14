<?php
require_once('models/user_edit.php');

$utilisateurs = getAllUtilisateurs();
$profils = getProfils();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $newProfil = $_POST['new_profil'];
    modifierProfilUtilisateur($login, $newProfil);
    header('Location: index.php?page=admin');
    exit;
}

include('views/modifier_utilisateur.php');
