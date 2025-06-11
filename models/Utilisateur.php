<?php
class Utilisateur {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function verifierIdentifiants($login, $motDePasse) {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE login = ?");
        $stmt->execute([$login]);
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur && password_verify($motDePasse, $utilisateur['mot_de_passe'])) {
            return $utilisateur;
        }

        return false;
    }
}
?>
