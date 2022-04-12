<?php
session_start();
if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {

        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if ($pseudo_saisi == $pseudo_par_defaut and $mdp_saisi == $mdp_par_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: index.php');
        } else {
            echo "votre mot de passe ou pseudo est incorrect";
        }
    } else {
        echo "Veuillez completer tous les champs...";
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
    <title>Se connecter</title>
</head>

<body>
    <br><br>
    <form method="POST" class="container">
        <br><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="mdp" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="valider">Submit</button>
    </form>
</body>

</html>