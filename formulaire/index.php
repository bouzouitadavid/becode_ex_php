<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les formulaires php</title>
    <style>
    .extension {
        color: white;
        background: red;
        padding: 2px 4px;
        border-radius: 2px;
    }
    .subtext {
        font-size: 0.8em;
        text-indent:0.5em;
        margin: 0;
        padding: 0;
    }
    </style>
</head>
<body>
<h1>Formulaire</h1>
<h2>php</h2>
<h3>Ex 1 et 3</h3>
    <form action="user.php" method="GET">
    <fieldset>
    <legend>Méthod GET</legend>
        <input type="text" name="name" id="name"><label for="name">Nom</label>
        <input type="text" name="firstname" id="firstname"><label for="firstname">Prénom</label>
        <button type="submit">PUSH</button>
        </fieldset>
    </form>
<h3>Ex 2 et 4</h3>
    <form action="user.php" method="POST">
    <fieldset>
    <legend>Méthod POST</legend>
        <input type="text" name="name" id="name"><label for="name">Nom</label>
        <input type="text" name="firstname" id="firstname"><label for="firstname">Prénom</label>
        <button type="submit">PUSH</button>
        </fieldset>
    </form>
<h3>Ex 5 à 8</h3>
    <?php 
    if(isset($_POST["gender"]) && isset($_POST["name"]) && isset($_POST["firstname"]) && isset($_FILES["pdf"]) && $_FILES["pdf"]["error"] == 0) {
        $extension_pdf = $_FILES["pdf"]["name"];
        $extFiles_name = pathinfo($_FILES["pdf"]["name"])["filename"];
        // $extension_autorised = array("jpg", "js", "pdf");
        $extFiles = pathinfo($extension_pdf, PATHINFO_EXTENSION);
        if ($extFiles !== "pdf" && $_FILES["pdf"]["size"] <= 1000000) {
            echo "pas le bon extension fichier ou trop lourd";
        } else {
            echo "Bonjour ".$_POST["gender"]." ".$_POST["name"]." ".$_POST["firstname"]."<br>";
            move_uploaded_file($_FILES["pdf"]["tmp_name"], "uploads/".basename($_FILES["pdf"]["name"]));
            echo 'Super le fichier <span class="extension">'.$extFiles_name.'</span> avec l\'extension <span class="extension">'.$extFiles."</span> est uploader dans le dossier uploads à la racine du site";
        }
    }
  else { ?>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <fieldset>
        <legend>Ex 5</legend>
        <select name="gender" id="gender">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
        </select>
        <input type="text" name="name" id="name"><label for="name">Nom</label>
        <input type="text" name="firstname" id="firstname"><label for="firstname">Prénom</label>
        <fieldset>
        <legend>Votre fichier</legend>
        <input type="file" name="pdf" id="pdf">
        <p class="subtext">.jpg .js .pdf</p>
        </fieldset>
        <button type="submit">PUSH</button>
        </fieldset>
    </form>
    <?php } ?>
</body>
</html>