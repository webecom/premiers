<?php

// Commentaire en fin de ligne

/*
Commentaires sur 
plusieurs lignes
*/


// Affichage des messages d'erreur (en mode mise au point)
// Commencer tous les programmes (ceux appelés depuis le navigateur)
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "library/fonctions.php";

// 4 variantes du include :
// include : insère le fichier à cet endroit, même si il a déjà été chargé (par exemple, un morceau de HTML)
// include_once: insère le fichier que si on ne l'a pas déjà chargé (idéal pour les librairies de fonctions, et les classes)
// require : idem include, plante le programme si le fichier n'existe pas
// require_once : idem include_once, plante le programme si le fichier n'existe pas


echo "Bonjour"; // echo : "envoie" l'expression qui suit dans le "flux" HTML


// Variables : le nom comence toujours par $
$prix = 12;     // affectation : pas besoin de mot clé pour déclarer


// Expressions de calcul
$ttc = $prix * 1.2;     // Comme en JS, le point est le séparateur des décimales
//  Mêmes opération qu'en JS

// Concaténation
$nom = "Blanchot";
$prenom = "Christophe";
$nomComplet = $prenom . " " . $nom;         // La concaténation est le "."

$a = "1" . 2;   // "12"

echo $nomComplet;


// Le . étant la concaténation, le symbole pour séparer unn objet de sa propriété est ->
// en JS :  element.backgroundColor = "red"
// En PHP
$elt->backgroundColor = "red";          // On reverra cela quand on travaillera la programmation orientée objet


// Chaines de caractères
// Le guillements double est plus riche (des caractères spéciaux sont interprétés)
echo "$nom $prenom\n";        // Blanchot Christophe, le \n génère un saut de ligne
echo '$nom $prenom';        // $nom $prenom



// Conditions
if ($nom == "Blanchot") {
    echo "C'est bien lui !";
} else if ( $nom == "Durand") {
    echo "C'est l'autre";
} else {
    echo "Je ne sais pas qui c'est";
}


// Pour les opérateurs sur les condition ET, OU, on peut les écrire :
if ($prix >=8 and $prix <= 12) {}
if ($prix >=8 && $prix <= 12) {}

// Pour le ou : or ou ||  

for($i = 1; $i < 10; $i++) {
    echo "$i<br>";
}

// Pour l'exercice 1, on a besoin de récupérr l'heure courante :
echo "<br>" . date("H") . "<br>";


// Tableaux
// Liste simples
$balisesHtml = [ "p", "div", "h1", "h2" ];
// Le premier élément est :
$elt1 = $balisesHtml[0];
// On peut ajouter un élément
$balisesHtml[] = [ "h3" ];

// Tableau indexé

echo "<br/>-------------<br/>";

$contact = [
    "nom" => "Blanchot",
    "prenom" => "Christophe",
    "age" => 57,
];
$nomComplet = $contact["prenom"] . " " . $contact["nom"];
$contact["ville"] = "Chabeuil";
$contact["age"] = 55;
unset($contact["age"]);     // Supprime l'index "age" dans le tableau contenu dans $contact

if (isset($contact["profession"])) {        // isset retourne true si l'élément existe, false sinon
    echo $contact["profession"];
}

?>
