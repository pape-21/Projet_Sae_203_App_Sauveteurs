<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// À remplacer par une vraie vérification dans un modèle (models/)
if ($username === 'admin' && $password === 'admin') {
    $_SESSION['user'] = $username;
    header('Location: ../views/dashboard.php');
} else {
    echo "Identifiants incorrects.";
}
