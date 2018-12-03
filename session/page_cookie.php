<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>session php page cookie</title>
</head>
<body>
<h3>Ex 3</h3>
<h4>Vos informations</h4>
<?php
        echo "Votre login : ".$_COOKIE["login"]."<br>";
        echo "Votre Mot de passe : ".$_COOKIE["password"]."<br>"; 
if(isset($_POST["login"]) && isset($_POST["password"])) {
    setcookie("login", $_POST["login"], time() + 365*24*3600, null, null, false, true);
    setcookie("password", $_POST["password"], time() + 365*24*3600, null, null, false, true);
} else {
    setcookie("login", "Votre login", time() + 365*24*3600, null, null, false, true);
    setcookie("password", "Votre mdp", time() + 365*24*3600, null, null, false, true);
} ?>
<h3>Ex 4</h3>
<h4>Modififier vos informations</h4>
<form action="page_cookie.php" method="POST">
    <label for="login">Login --> </label>
    <input type="text" name="login" id="login" value="<?= $_COOKIE["login"] ?>">
    
    <label for="password">Password --> </label>
    <input type="text" name="password" id="password" value="<?= $_COOKIE["password"] ?>">
    <input type="submit" value="Valider">
</form>
<blockquote>Rafraichire la page apres validation du formulaire ou clique valider 2x -> "solutionnement en cours"</blockquote>





</body>
</html>