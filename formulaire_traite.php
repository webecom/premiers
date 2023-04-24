<?php
// Traite les données du formulaire et affiche le résultat
// Reçoit : POST nom et age
/*
print_r($_POST);    // $_POST est un tableau, 
                    // dont les index sont les noms des champs de formulkaires sur un envoir par POST (et les valeurs sont les valeusrs saisies)
print_r($_GET);     // $_GET est un tableau des données envpyées par la méthode GET
print_r($_REQUEST);     // Tableau de toutes les valeurs envoyées par POST ou GET
*/

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci pour vos données</title>
</head>
<body>
    Bonjour <?= $_POST["prenom"] ?>, vous avez <?= $_POST["age"] ?> ans
</body>
</html>
