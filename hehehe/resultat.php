<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exo3</title>
    </head>
    <body>
        <h2>
            Résultats
        </h2>
        <?php
            if (isset($_GET['perimetre'], $_GET['surface'])) 
            {
                $perimetre = htmlspecialchars($_GET['perimetre']);
                $surface = htmlspecialchars($_GET['surface']);

                echo "Périmètre : " . $perimetre . "<br>";
                echo "Surface : " . $surface . "<br>";
            } 
            else 
            {
                echo "Les résultats ne sont pas disponibles.";
            }
        ?>
    </body>
</html>
