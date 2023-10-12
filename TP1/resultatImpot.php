<?php
require_once 'impot.php';

if (isset($_POST['nom']) && isset($_POST['revenu'])) {
    $nom = $_POST['nom'];
    $revenu = floatval($_POST['revenu']);
    
    $impot = new Impot($nom, $revenu);
    $message = $impot->AfficheImpot();
    
    echo $message;
} else {
    echo "Veuillez remplir le formulaire.";
}
?>
