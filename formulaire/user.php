<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page user de formulaire php</title>
</head>
<body>
<h3>Ex 3</h3>
    <?php 
    if(isset($_GET["name"]) && isset($_GET["firstname"])) {
        echo $_GET["name"]."<br>";
        echo$_GET["firstname"];
    } else { echo "rien"; }
    ?>
<h3>Ex 4</h3>
    <?php 
    if(isset($_POST["name"]) && isset($_POST["firstname"])) {
        echo $_POST["name"]."<br>";
        echo$_POST["firstname"];
    } else { echo "rien"; }
    ?>
</body>
</html>