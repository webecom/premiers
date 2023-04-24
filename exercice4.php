<?php
// Afficher les mois de l'année avec leur numéro, leur nom, et leur durée

// initialisations
ini_set('display_errors', 1);
error_reporting(E_ALL);

// récupération de la liste des mois
include "data/mois.php";        // initialise la variable $mois

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mois</title>
</head>
<body>
    <h1>Liste des mois</h1>
    <table>
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Durée</th>
        </tr>
        <?php
        // Une ligne par mois
        // Pour chaque mois, générer la ligne de la table
        foreach($mois as $numero => $descrMois) {
            // $numero : vaut le numero du mois en cours de traitement
            // $descrMois : vaut le tableua qui donne le nom et la duree du mois courant 
            // Générer la ligne de la table
            // Ouvrir TR
            echo "<tr>";
            // générer TD numero
            echo "<td>$numero</td>";

            // générer TD nom
            echo "<td>" . $descrMois["nom"] . "</td>";

            // générer TD durée
            echo "<td>" . $descrMois["duree"] . "</td>";

            // Fermer TR
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>