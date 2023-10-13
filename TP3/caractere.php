<?php

// Classe de base Mammifère
class Mammifère {
    protected $cri;
    protected $taille;
    protected $pattes;
    protected $couleurPelage;
    protected $sexe;
    protected $lieuHabitation;
    protected $placeAlimentaire;

    public function __construct($cri, $taille, $pattes, $couleurPelage, $sexe, $lieuHabitation, $placeAlimentaire) {
        $this->cri = $cri;
        $this->taille = $taille;
        $this->pattes = $pattes;
        $this->couleurPelage = $couleurPelage;
        $this->sexe = $sexe;
        $this->lieuHabitation = $lieuHabitation;
        $this->placeAlimentaire = $placeAlimentaire;
    }

    public function crier() {
        echo $this->cri;
    }

    public function manger() {
        echo "Je mange de la nourriture.";
    }
}

// Classe Chat
class Chat extends Mammifère {
    public function __construct($cri, $taille, $couleurPelage, $sexe, $lieuHabitation, $placeAlimentaire) {
        parent::__construct($cri, $taille, 4, $couleurPelage, $sexe, $lieuHabitation, $placeAlimentaire);
    }

    public function courir() {
        echo "Je cours rapidement.";
    }
}

// Classe Chien
class Chien extends Mammifère {
    public function __construct($cri, $taille, $couleurPelage, $sexe, $lieuHabitation, $placeAlimentaire) {
        parent::__construct($cri, $taille, 4, $couleurPelage, $sexe, $lieuHabitation, $placeAlimentaire);
    }

    public function courir() {
        echo "Je cours aussi rapidement.";
    }
}

// Classe Poisson
class Poisson extends Mammifère {
    protected $nageoire;

    public function __construct($cri, $taille, $couleurEcailles, $sexe, $lieuHabitation, $placeAlimentaire, $nageoire) {
        parent::__construct($cri, $taille, 0, $couleurEcailles, $sexe, $lieuHabitation, $placeAlimentaire);
        $this->nageoire = $nageoire;
    }

    public function nager() {
        echo "Je nage dans l'eau.";
    }
}

// Classe Poisson Rouge (hérite de la classe Poisson)
class PoissonRouge extends Poisson {
    public function __construct($cri, $taille, $sexe, $lieuHabitation, $placeAlimentaire, $nageoire) {
        parent::__construct($cri, $taille, "rouge", $sexe, $lieuHabitation, $placeAlimentaire, $nageoire);
    }
}

// Classe Requin (hérite de la classe Poisson)
class Requin extends Poisson {
    public function __construct($cri, $taille, $sexe, $lieuHabitation, $placeAlimentaire, $nageoire) {
        parent::__construct($cri, $taille, "gris", $sexe, $lieuHabitation, $placeAlimentaire, $nageoire);
    }

    public function mordre() {
        echo "Je peux mordre avec mes dents acérées.";
    }
}

// Exemple d'utilisation
$chat = new Chat("Miaou", "Moyen", "Noir", "Mâle", "Maison", "Carnivore");
$chien = new Chien("Wouf", "Grand", "Marron", "Femelle", "Maison", "Omnivore");
$poissonRouge = new PoissonRouge("Glouglou", "Petit", "Mâle", "Aquarium", "Herbivore", "Petite");
$requin = new Requin("Aaaah", "Géant", "Femelle", "Océan", "Carnivore", "Grande");

$chat->crier();  // Affiche "Miaou"
$chat->courir();  // Affiche "Je cours rapidement"
$chien->manger();  // Affiche "Je mange de la nourriture"
$poissonRouge->nager();  // Affiche "Je nage dans l'eau"
$requin->mordre();  // Affiche "Je peux mordre avec mes dents acérées"
