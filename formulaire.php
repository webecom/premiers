<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démo sur formulaires</title>
</head>
<body>
    <h1>Démo sur les formulaires</h1>
    <form method="post" action="formulaire_traite.php">
        <label>Votre nom: <input type="text" name="nom"></label><br>
        <label>Votre age: <input type="number" name="age"></label><br>
        <input type="submit" value="envoyer">
    </form>
</body>
</html>