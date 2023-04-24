<?php
/* Page principale pour l'exercice 1 :

Afficher une page qui en titre de l'onglet et en titre de la page (balises title et h1) affiche 
     Bonjour si on est le matin
      Bonsoir si on est l'après midi

pour savoir l'heure qu'il est, on peut utiliser date("H")
*/

// Définir le message à afficher : le mettre dans $message
// récupérr l'heure
$heure = date("H");
// ON essaie à 9h00 :
// Si on est le matin; cad si l'heure est <= 11 (ou < 12) :
// le message est Bonjour
// Sinon c'est Bonsoir
if ( $heure < 12) {  
    $message = "Bonjour";
} else {
    $message = "Bonsoir";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $message ?></title>
</head>
<body>
    <h1>"<?= $message // <?= expression est équivalent <?php echo expression ?></h1>
    <?php echo "<p>" . $message . "</p>"; ?>
</body>
</html>

