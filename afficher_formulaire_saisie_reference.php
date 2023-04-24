<?php
/*
URL : afficher un formulaire qui permet de saisir une référence article pour afficher le détail de l'article

Paramètres : néant

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisir la référence</title>
</head>
<body>
    <form method="get" action="affiche_article.php">
        <label>référence article : <input type="text" name="reference"></label>
        <input type="submit" value="Afficher">
    </form>
</body>
</html>