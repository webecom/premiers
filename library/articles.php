<?php

function articlesEnStock() {
    // Rôle : fabriquer la liste des articles en stock
    // Retour un tableau des articles : 
        /*
        [ "ref1" => [ "designation" => "cccccc", "pricx" => 12, ....  ],
        .....
        ]
        */
    // paramètres : néant (la liste complète des articles est disponibles
    
    // Récupérer les articles
    include "data/donnees.php";
    // Initialiser le retour 
    $resultat = [];

    // Pour chaque article
    foreach($articles as $ref => $detail) {
        // si il est en stock
        if ($detail["stock"] > 0) {
            // on le copie dasn $result
            $resultat[$ref] = $detail;
        }
    }
    // On retourne $result
    return $resultat;
}


function afficheArticle($detail, $ref) {
    // Rôle : afficher  la div d'un article
    // Retour : néant
    // paramètres :
    //      $detail : détail de l'article
    //      $ref : référence de l'article

    echo "<div>";
    echo '<p class="reference">' . $ref . "</p>";
    echo '<p class="libelle">' . $detail["designation"] . "</p>";
    echo '<p class="prix">' . $detail["prix"] . "</p>";
    echo "</div>";

}

function existeEnCouleur($detail, $couleur) {}