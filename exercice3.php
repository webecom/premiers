<?php
/*
Calcul du prix d'un colis :
- on demande les 3 dimensions, le poids, et la zone de destination (France, Europe, reste du monde) 
- soyez clair sur les unités de saisie
- on a un bouton "calculer le prix"
Le prix est :
- 10 euros d'office pour les premiers 2 kg
- 1 euros de plus par 100 gr complémentaire (toute tranche comencé est due, 2,230 kg ets valorsié 2 kg + 300 grammes)
- ajout de 15 euros si une dimension au moins est supérieure à 1 mètre
- coefficient multiplicateur : +20% pour l'Europe, +50% pour le reste du monde

Bien sûr sans Javascript
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi d'un colis</title>
</head>
<body>
    <h1>Saisie des caractéristiques de l'envoi</h1>
    <form method="post" action="exercice3_calcule.php">
        <label>Longueur du colis (en cm) <input type="number" name="longueur"></label><br>
        <label>Largeur du colis (en cm) <input type="number" name="largeur"></label><br>
        <label>Hauteur du colis (en cm) <input type="number" name="hauteur"></label><br>
        <label>Poids du colis (en kg) <input type="number" step="any" name="poids"></label><br>
        <label>Zone de destination <select name="destination">
            <option value="FR">France</option>
            <option value="EUR">Europe hors France</option>
            <option value="MONDE">Reste du monde</option>
        </select></label><br>
        <input type="submit" value="Calculer le prix">
    </form>
</body>
</html>

