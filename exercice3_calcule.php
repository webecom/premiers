<?php
/*
URL de calcul et affichage du prix d'un colis

Paramètres:
    POST longueur : longueur en cm 
    POST largeur : largeur en cm
    POST hauteur : hauteur en cm
    POST poids : poids en kg
    POST destination : zone de destination (FR, EUR, MONDE)


Le prix est :
- 10 euros d'office pour les premiers 2 kg
- 1 euros de plus par 100 gr complémentaire (toute tranche comencé est due, 2,230 kg ets valorsié 2 kg + 300 grammes)
- ajout de 15 euros si une dimension au moins est supérieure à 1 mètre
- coefficient multiplicateur : +20% pour l'Europe, +50% pour le reste du monde

*/

// Initialisations diverses (debug)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Récupérer les paramètres
// Si on n'a pas les paramètres :
// 4 solutions ergonmiques :
//   - soit on donne des valeurs par défaut
//   - on affiche le formulaire de saisie
//   - on redirige sur l'URL du formulaire de saisie : choix dans ce cas
//   - on affiche un message d'erreur
if (empty($_POST["longueur"]) or empty($_POST["largeur"]) 
        or empty($_POST["hauteur"]) or empty($_POST["poids"]) 
        or empty($_POST["destination"])) {   
            // empty : vrai si le paramètres est non initialisé, vaut NULL, 0, "", false, tableau vide ( [] )
            //    faux si on a un nombre différent de zéro, true, un echaine non vide, incluant "0"
    header("Location: exercice3.php");
    exit;           // Met fin au programme             
}

$longueur = $_POST["longueur"];
$largeur = $_POST["largeur"];
$hauteur = $_POST["hauteur"];
$poids = $_POST["poids"];
$destination = $_POST["destination"];

// Calculer le prix
// Prix fixe incluant les 2 premiers kg
$prix = 10;

//DEBUG echo "Prix après composante 1 : $prix<br>";

// Supplément lié au poids (seulement si le poids est > 2kg)
if ($poids > 2) {
    $poidsPourSup = ($poids - 2) * 10;      // Si poids est 2,350 kg, alors le poidsPourSup est 3.50 x 100 grammes
    // Il faut arrondir au supérieur
    $poidsPourSup = ceil($poidsPourSup);      // on aura 4 ( x 100 grammes)
    // On ajoute 1 euro par tranche de 100 gr
    $prix += 1 * $poidsPourSup;
}

//DEBUG echo "Prix après composante poids : $prix<br>";
// Supplément lié aux dimensions
// Si longeur > 1 m ou largeur > 1 m ou hauteur > 1 m
//      alors ajouter 15 euros
if ($longueur > 100 or $largeur > 100 or $hauteur > 100) {
    $prix += 15;
}
//DEBUG echo "Prix après composante dimensions : $prix<br>";
// Zone de destination
// Si destination est EUR : ajoute 20% (multiplie par 1,2)
// Sinon si destination est MONDE : ajoute 50% (multiplie par 1,5)
if ($destination == "EUR") {
    $prix *= 1.2;
} else if ($destination == "MONDE") {
    $prix *= 1.5;
}
//DEBUG echo "Prix final : $prix<br>";


// Afficher le prix
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prix d'envoi de votre colis</title>
</head>
<body>
    <p>Le prix d'envoi de votre colis est <?= $prix ?> Euros</p>
</body>
</html>

