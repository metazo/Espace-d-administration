<?php
session_start();
if(!$_SESSION['mdp']) {
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <a href="./membres.php">Afficher tous les membres</a>
    <a href="./publier-article.php">Publier un nouvel article</a>
</body>
</html>