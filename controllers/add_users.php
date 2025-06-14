<?php
require_once('models/add_users.php');

$profils = getProfils();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $profil = $_POST['profil'];

    ajouterUtilisateur($login, $password, $profil);
    header('Location: index.php?page=admin');
    exit;
}

include('views/add_users.php');
?>
