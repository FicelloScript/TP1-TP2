<?php
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($somme) {
        $this->solde += $somme;
    }

    public function retrait($somme) {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
        } else {
            echo "Fond insuffisant pour le retrait.";
        }
    }

    public function affiche() {
        echo "Le solde du compte bancaire de {$this->nom} est de {$this->solde} euros.";
    }
}
?>

