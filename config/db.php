<?php
// config/db.php
// Fichier de configuration pour la connexion à la base de données

function db_connect() {
    try {
        return new PDO(
            'mysql:host=192.168.156.221;dbname=projet4_tp2;charset=utf8',
            'pfall03',
            'gtrnet',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Activer les exceptions pour les erreurs
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération par défaut
            ]
        );
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage() . '<br><pre>' . $e->getTraceAsString() . '</pre>');
    }
}
