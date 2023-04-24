<?php
/*
Programme (URL) qui affiche une page avec tout le détail client d'un article :
  - référence, désignation, prix de vente, stock, coloris proposés



Paramétres :
   GET reference : référence de l'article à afficher

   (si la référence demandée n'existe pas, on met un message d'erreur)


   l'url complète sera ...../affiche_article.php?reference=B12    (exemple avec B12)

Indice : print_r($articles[$_POST["reference"]]);

*/
 
// initialisations
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "data/donnees.php";

// Récupère les paramètres
$reference = $_GET["reference"];


// Préparer les infos à afficher : récupérer le détail de l'article (dont sa référence)
// Si l'article existe : on le récupère
// Sinon : on affiche un message d'erreur
if (isset($articles[$reference])) {
  $detailArticle = $articles[$reference];
} else {
  echo "L'article n'existe pas";  // On gérera un traitement plus propre plus tard dans la formation
  exit;   // On met fin au programme
}
// $detailArticle est un tableau qui contient la designation, le prix, les couleurs, etc..
// LLa référence est dans $reference

// Préparer le texte pour les coloris disponibles
$coloris = "";  // on part d'un texte vide
// Pour chaque couleur dans la description de l'article, on ajoute au coloris la couleur
foreach($detailArticle["coloris"] as $couleur) {
  $coloris .= $couleur . " ";
}

// Affichage
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $detailArticle["designation"] ?></title>
</head>
<body>
  <h1><?= $detailArticle["designation"] ?></h1>
  <p>Référence : <?= $reference ?></p>
  <p>Prix : <?= $detailArticle["prix"] ?> €</p>
  <p>Stock : <?= $detailArticle["stock"] ?></p>
  <p>Disponible en : <?= $coloris ?></p>
</body>
</html>
