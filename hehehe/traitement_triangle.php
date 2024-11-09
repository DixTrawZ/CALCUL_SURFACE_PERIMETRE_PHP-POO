<?php
    require_once 'Triangle.php';
    if (isset($_POST['ax'], $_POST['ay'], $_POST['bx'], $_POST['by'], $_POST['cx'], $_POST['cy'])) 
    {
        $p1 = [(float)$_POST['ax'], (float)$_POST['ay']];
        $p2 = [(float)$_POST['bx'], (float)$_POST['by']];
        $p3 = [(float)$_POST['cx'], (float)$_POST['cy']];
        $triangle = new Triangle($p1, $p2, $p3);
        $perimetre = $triangle->perimetre;
        $surface = $triangle->surface;
        header("Location: resultat.php?perimetre=$perimetre&surface=$surface");
        exit;
    } 
    else 
    {
        echo "Veuillez fournir les coordonnées des trois points du triangle.";
    }
?>
