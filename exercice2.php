<?php
/*
faire un formulaire pour saisir 2 nombres et une opération (+, - , multiplier, diviser)
Un bouton pour calculer
Puis on affiche (par un programme qui traite le formlaire) le résultat de l'opération


Version simplifiée : on ne saisi que les nombres et l'opération est une addition

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <form method="post" action="exercice2_calcule.php">
        <input type="number" name="nombre1">
        <select name="operation">
            <option value="add">+</option>
            <option value="sou">-</option>
            <option value="mul">x</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="nombre2">
        <input type="submit" value="Calculer">
    </form>
    
</body>
</html>
