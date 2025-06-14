<?php
require_once('models/user_edit.php');

$utilisateurs = getAllUtilisateurs();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    supprimerUtilisateur($login);
    header('Location: index.php?page=admin');
    exit;
}

include('views/supprimer_utilisateur.php');
