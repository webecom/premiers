<?php
/*
URL permetant d'afficher la liste de tous les articles (désignation)

Paramètres : néant

*/


// initialisations
ini_set('display_errors', 1);
error_reporting(E_ALL);

// récupération des paramètrs : NEANT

// récupérer la liste des articles : dans $articles
include "data/donnees.php";

// Afficher les éléments de la liste
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
</head>
<body>
    <?php
        // afficher toutes les désignations
        //  -> afficher chaque désignation
        //  -> afficher la désignation de chaque article
        // Pour chaque article : générr un paragraphe avec la désignation
        foreach($articles as $reference => $tabArticle) {
            // Ici on ne traite que un article, l'article courant (le premlier, puis le 2ème au second passage, etc...)
            // On a $reference et $tabRaticle (yableaux des infos de l'article) pour "connaitre" cet article

            //générer un paragraphe avec la désignation
            ?>
            <p><a href="affiche_article.php?reference=<?= $reference ?>"><?= $tabArticle["designation"] ?></a></p>
            <?php
        }
    ?>
</body>
</html>

