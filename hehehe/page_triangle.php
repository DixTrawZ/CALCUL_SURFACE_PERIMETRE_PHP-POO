<!DOCTYPE html>
<html>
	<head>
		<title> Exo3 </title>
		<meta charset="UTF-8"/>
	</head>
	<body>
        <h1>
            Calcul de surface et périmètre du triangle.
        </h1>
        <div>
            <h2>
                Points :
            </h2>
            <form action="traitement_triangle.php" method="POST">
                <h3>
                    Point A
                </h3>
                <label>
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
                <br>
                <button type="submit">
                    Calculer le triangle
                </button>
            </form>
        </div>
	</body>
</html>