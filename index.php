<?php
require('CompteBancaire.php'); // Inclure le fichier de la classe CompteBancaire

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $solde = intval($_POST['solde']);
    $operation = $_POST['operation'];
    $somme = intval($_POST['somme']);

    // Créer un compte bancaire en utilisant les données du formulaire
    $compte = new CompteBancaire($nom, $solde);

    // Effectuer l'opération (dépôt ou retrait)
    if ($operation === 'depot') {
        $compte->depot($somme);
    } elseif ($operation === 'retrait') {
        $compte->retrait($somme);
    }
}

?>
