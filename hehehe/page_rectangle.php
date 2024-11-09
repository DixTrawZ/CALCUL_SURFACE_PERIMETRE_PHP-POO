<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
    <h2>
        Saisir les points du rectangle
    </h2>
    <form action="traitement_rectangle.php" method="POST">
        <h3>
            Point A
        </h3>
        <label for="ax">
            x :
        </label>
        <input type="number" id="ax" name="ax" required>
        <label for="ay">
            y :
        </label>
        <input type="number" id="ay" name="ay" required>
        <h3>
            Point B
        </h3>
        <label for="bx">
            x :
        </label>
        <input type="number" id="bx" name="bx" required>
        <label for="by">
            y :
        </label>
        <input type="number" id="by" name="by" required>
        <h3>
            Point C
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
            Point D
        </h3>
        <label for="dx">
            x :
        </label>
        <input type="number" id="dx" name="dx" required>
        <label for="dy">
            y :
        </label>
        <input type="number" id="dy" name="dy" required>
        <button type="submit">
            Calculer le rectangle
        </button>
    </form>
</body>
</html>
