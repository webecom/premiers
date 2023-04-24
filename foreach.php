<?php
// Parcourir un tableau
$articles = [
    "X121" => "Souris sans fil",
    "A34" => "Ecran 26 pouces",
    "Z23" => "Ecran 22 pouces",
];


// On veut afficher les éléments du tableau
// Pour chaque élément du tableau : on afiche le détail
//    foreach($tableau_a_parcourir as $index => $valeur)
// ou foreach($tableau_a_parcourir as $valeur)
//   $tableau_a_parcourir : on remplace par le tableau réel  ($articles)
//   $index : variable dans laquelle foreach var mettre l'index courant : on choisit son nom en fonction de ce que représente l'index ($reference)
//   $valeur : variable dans laquelle foreach var mettre la valeur courante : on choisit son nom en fonction de ce que représente la valeur ($libelle)
foreach($articles as $reference => $libelle) {
    // Instructions a éxécuter sur chaque élément du tableau (donc s'appliquant à l'index courant et la valeur courante)
    echo "<p>$reference: $libelle</p>\n";

}
