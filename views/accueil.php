<link rel='stylesheet' href='./objets/css/style.css'>

<?php require 'views/header.php'; ?>

<div class='container'>
    <h2>Bienvenue <?= htmlspecialchars($_SESSION['user']['login']) ?></h2>
    
<?php require 'views/footer.php'; ?>
