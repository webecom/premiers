<?php
$nom = "Christophe";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $nom;
    ?>
</body>
</html>

<?php
// Exercice :
// Afficher une page qui en titre de l'onglet et en titre de la page (balises title et h1) affiche 
//      Bonjour si on est le matin
//      Bonsoir si on est l'après midi

// pour savoir l'heure qu'il est, on peut utiliser date("H")
