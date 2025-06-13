<?php
require_once 'models/planning.php';
#include 'views/header.php'; 
if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit;
}
$plannings = get_recent_planning();  // 24 dernières heures
require 'views/planning.php';
