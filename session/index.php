<?php 
session_start();

$_SESSION["nom"] = "David";
$_SESSION["prenom"] = "Croquette";
$_SESSION["age"] = 22;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>session php</title>
</head>
<body>
<h1>Session</h1>
<h2>php</h2>
<h3>Ex 1</h3>
<?php 
    echo "Votre User Agent : ".$_SERVER["HTTP_USER_AGENT"]."<br>";
    echo "Votre Adresse Ip : ".$_SERVER["HTTP_HOST"]."<br>";
    echo "Votre Server : ".$_SERVER["SERVER_NAME"]."<br>";
?>
<h3>Ex 2</h3>
    <a href="http://192.168.64.3/becode/php/ex/session/page1.php">PAGE 1</a>
<h3>Ex 3</h3>
<?php
if(isset($_POST["login"]) && isset($_POST["password"])) {
    setcookie("login", $_POST["login"], time() + 365*24*3600, null, null, false, true);
    setcookie("password", $_POST["password"], time() + 365*24*3600, null, null, false, true);
    echo "Cookie in the box ";
    echo '<a href="http://192.168.64.3/becode/php/ex/session/page1.php">Voir les cookies</a>';
} else { ?>
<form action="index.php" method="POST">
    <input type="text" name="login" id="login"><label for="login">Login</label>
    <input type="password" name="password" id="password"><label for="password">Password</label>
    <input type="submit" value="Send">
<?php } ?>
</form>
</body>
</html>