<?php
/*

URL : Afficher le carré du nombre envoyé

Paramètres :
   GET nb : nombre dont on veut afficher le carré


*/

ini_set('display_errors', 1);
error_reporting(E_ALL);

// récupérer les paramètres
if (isset($_GET["nb"])) {
    $nb = $_GET["nb"];
} else {
    $nb = 0;
}

echo "Le carré de $nb est : " . $nb * $nb;
