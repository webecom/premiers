<?php
/*
A partir du tableau des articles, afficher un bloc pour chaque article ayant du stock,
avec la référence, la désignation, le prix


Correction partielle (non fonctionnelle, sans tenir compte du HTML)
*/


// initialisations
include_once "library/articles.php";



// récupération des articles



// Pour chaque article ayant un stock
// Afficher la fiche article
foreach(articlesEnStock() as $reference -> $detailArticle) {
    afficheArticle($detailArticle, $reference);
}


// Pour chaque article
//   Si il a du stock
//      Afficher la fiche article
foreach($articles as $reference -> $detailArticle) {
    if ($detailArticle["stock"] > 0) {
        afficheArticle($detailArticle, $reference);
    }
}

// Afficher ceux existant en gris 
// Pour chaque article
//   Si il existe en gris
//      Afficher la fiche article
foreach($articles as $reference -> $detailArticle) {
    if ( existeEnCouleur($detailArticle, "gris")) {
        afficheArticle($detailArticle, $reference);
    }
}