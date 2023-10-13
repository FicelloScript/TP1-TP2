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

<!DOCTYPE html>
<html>
<head>
    <title>Compte Bancaire</title>
</head>
<body>
    <h1>Gestion de Comptes Bancaires</h1>
    
    <form method="post" action="index.php">
        <label for="nom">Nom du titulaire :</label>
        <input type="text" name="nom" required>
        <br>

        <label for="solde">Solde initial :</label>
        <input type="number" name="solde" value="1000" required>
        <br>

        <label for="operation">Opération :</label>
        <select name="operation">
            <option value="depot">Dépôt</option>
            <option value="retrait">Retrait</option>
        </select>
        <br>

        <label for="somme">Somme :</label>
        <input type="number" name="somme" required>
        <br>

        <input type="submit" value="Effectuer l'opération">
    </form>

    <?php
    // Afficher le compte après l'opération
    if (isset($compte)) {
        $compte->affiche();
    }
    ?>

</body>
</html>
