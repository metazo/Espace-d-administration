<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin', 'root' , 'root');
if(!$_SESSION['mdp']) {
    header('Location: connexion.php');
}

if(isset($_POST['envoi'])) {
    if(!empty($_POST['titre']) AND !empty($_POST['description'])){
        $titre = htmlspecialchars($_POST['titre']);
        $description = nl2br($_POST['description']);
    }else{
        echo "Veuillez compléter tous les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Publier un article </title>
</head>
<body>
    <form method="POST">
    <input type="text" name="titre">
    <br>
    <textarea name="description" id="" cols="30" rows="10">
    </textarea>
    <br>
    <input type="submit" name="envoi">
    </form>
</body>
</html>