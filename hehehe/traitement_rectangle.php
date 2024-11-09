<?php
    require_once 'Rectangle.php';
    if (isset($_POST['ax'], $_POST['ay'], $_POST['bx'], $_POST['by'], $_POST['cx'], $_POST['cy'], $_POST['dx'], $_POST['dy'])) 
    {
        $p1 = [(float)$_POST['ax'], (float)$_POST['ay']];
        $p2 = [(float)$_POST['bx'], (float)$_POST['by']];
        $p3 = [(float)$_POST['cx'], (float)$_POST['cy']];
        $p4 = [(float)$_POST['dx'], (float)$_POST['dy']];
        $rectangle = new Rectangle($p1, $p2, $p3, $p4);
        $perimetre = $rectangle->perimetre;
        $surface = $rectangle->surface;
        header("Location: resultat.php?perimetre=$perimetre&surface=$surface");
        exit;
    } 
    else 
    {
        echo "Veuillez fournir les coordonnées des quatre points du rectangle.";
    }
?>
