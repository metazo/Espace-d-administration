<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin', 'root' , 'root');
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
    <title>Afficher tous les membres</title>
</head>
<body>
    <!-- Afficher tous les membres -->
    <?php
    $recupUsers = $bdd->query('SELECT * FROM membres');
    while($user = $recupUsers->fetch()){
        ?>
        <p><?= $user['pseudo']; ?> <a href="./bannir.php?id = <? $user['id']; ?>" style="color: red; text-decoration:none;" >Bannir le membre</a> </p>
        <?php
    }
    ?>
    <!-- Fin d'afficher tous les membres -->
</body>
</html>