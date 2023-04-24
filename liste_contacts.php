<?php
/*
Afficher la liste des contacts (nom et prénom)
*/


// Initialisations diverses (debug)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// récupération des données (pour l'instant dans un tableau "fixe")
include "data/contacts.php";        // Initialiser la variable $personnes

// DEBUG : visualiser le tableau $personnes
/*
echo "<pre>";
print_r($personnes);
echo "</pre>";
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire</title>
</head>
<body>
    <h1>Annuaire</h1>
    <?php 
    // Afficher un paragraphe avec prénom et nom pour chacun des éléments du tableau $personnes
    // exemple : <p>Paul Dupond</p>
    foreach($personnes as $tabPersonne) {       // Les éléments du tableau $personnes sont un tableau qui décrit une personne
        /* Exemple de $tabPersonne
        [
           "nom" => "Dupond",
           "prenom" => "Paul",
           "age" => 45,
           "langues" => [ "EN", "FR" ],
       ]
       */
      // ON veut afficher <p>Paul Dupond</p>
      echo "<p>" . $tabPersonne["prenom"] . " " . $tabPersonne["nom"] .  "</p>";
    }
    ?>
</body>
</html>

