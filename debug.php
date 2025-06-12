<?php
// Mot-clé à chercher
$motCle = 'Connexion OK';

// Fonction récursive pour parcourir les fichiers
function chercherDansFichiers($dossier, $motCle) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dossier));

    foreach ($rii as $fichier) {
        if ($fichier->isDir()) continue;

        $chemin = $fichier->getPathname();
        $contenu = file($chemin);

        foreach ($contenu as $numeroLigne => $ligne) {
            if (stripos($ligne, $motCle) !== false) {
                echo "👉 Trouvé dans $chemin (ligne " . ($numeroLigne + 1) . "):\n";
                echo trim($ligne) . "\n\n";
            }
        }
    }
}

// Démarrer la recherche à partir du dossier courant
chercherDansFichiers(__DIR__, $motCle);
