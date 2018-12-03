<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page 1</title>
</head>
<body>
<h3>Ex 2</h3>
    <?= "<ul>".
        "<li>"."Votre nom d'utilisateur : ".$_SESSION["nom"]."</li>".
        "<li>"."Votre prénom : ".$_SESSION["prenom"]."</li>".
        "<li>"."Votre age : ".$_SESSION["age"]."</li>".
        "</ul>";
    ?>
<h3>Ex 4</h3>
<?=
    "<p>"."Votre login est : ".$_COOKIE["login"].
    " et votre mot de passe est ".$_COOKIE["password"].
    "</p>";
?>
<a href="page_cookie.php">Modificer vos cookie ?</a>
</body>
</html>