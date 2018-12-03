<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_GET["nom"]) && isset($_GET["prenom"])){
    echo $_GET["nom"];
    echo $_GET["prenom"];
} else {
    echo "pas remplis !!!";
}

if(isset($_GET["dateDebut"]) && isset($_GET["dateFin"])) {
    echo $_GET["dateDebut"];
    echo $_GET["dateFin"];
} else {
    echo "pas remplis !!!";
}

if(isset($_GET["batiment"]) && isset($_GET["salle"])){
    echo "Cool";
}
?>



</body>
</html>