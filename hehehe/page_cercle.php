<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
    <h2>
        Saisir les points du cercle
    </h2>
    <form action="traitement_cercle.php" method="POST">
        <h3>
            Centre du cercle
        </h3>
        <label for="cx">
            x :
        </label>
        <input type="number" id="cx" name="cx" required>
        <label for="cy">
            y :
        </label>
        <input type="number" id="cy" name="cy" required>
        <h3>
            Point sur le périmètre
        </h3>
        <label for="px">
            x :
        </label>
        <input type="number" id="px" name="px" required>
        <label for="py">
            y :
        </label>
        <input type="number" id="py" name="py" required>
        <button type="submit">
            Calculer le cercle
        </button>
    </form>
</body>
</html>
