<?php
if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit;
}
require 'views/accueil.php';
