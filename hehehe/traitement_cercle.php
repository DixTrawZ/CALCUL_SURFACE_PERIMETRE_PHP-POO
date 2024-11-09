<?php
    require_once 'Cercle.php';
    if (isset($_POST['cx'], $_POST['cy'], $_POST['px'], $_POST['py'])) 
    {
        $centre = [(float)$_POST['cx'], (float)$_POST['cy']];
        $point = [(float)$_POST['px'], (float)$_POST['py']];
        $cercle = new Cercle($centre, $point);
        $perimetre = $cercle->perimetre;
        $surface = $cercle->surface;
        header("Location: resultat.php?perimetre=$perimetre&surface=$surface");
        exit;
    } 
    else 
    {
        echo "Veuillez fournir les coordonnées du centre et d'un point sur le périmètre du cercle.";
    }
?>
