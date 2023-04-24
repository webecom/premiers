<?php
// Programme appelé par le navigateur
// Rôle : calculer une opération sur 2 nombrs et afficher le résultat
// Paramètres 
//      POST nombre1 : le premier nombre
//      POST nombre2 : le second nombre
//      POST operation : l'opération à faire (add, sou, mul, div)

ini_set('display_errors', 1);
error_reporting(E_ALL);

// récupérer les saisies
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$operation = $_POST["operation"];


// Faire le calcul et stocket le résultat dans $resultat
// Si l'opération est add
// le résulat est nombre1 + nombre 2
// sinon si l'opération est sou
// le résulat est nombre1 - nombre 2
// sinon si l'opération est mul
// le résulat est nombre1 * nombre 2
// sinon si l'opération est div
// le résulat est nombre1 / nombre 2
if ($operation == "add") {
    $resultat = $nombre1 + $nombre2;
} else if ($operation == "sou") {
    $resultat = $nombre1 - $nombre2;
} else if ($operation == "mul") {
    $resultat = $nombre1 * $nombre2;
} else if ($operation == "div" and $nombre2 != 0) {
    $resultat = $nombre1 / $nombre2;
} else {
    $resultat = "non défini";
} 



// Afficher le résultat
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculatrice</title>
</head>
<body>
    <p>Le résultat est <?= $resultat ?></p>
</body>
</html>
