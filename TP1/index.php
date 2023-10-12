<!DOCTYPE html>
<html>
<head>
    <title>Calcul d'Impôt</title>
</head>
<body>
    <form action="resultatImpot.php" method="post">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" required><br><br>

        <label for="revenu">Revenu : </label>
        <input type="number" name="revenu" required><br><br>

        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>
