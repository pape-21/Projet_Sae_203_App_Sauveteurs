<?php
$host = '192.168.156.221';
$dbname = 'projet4_tp2'; // Remplacez par le nom de votre base de données
$username = 'pfall03';
$password = 'gtrnet';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
