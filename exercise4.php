<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions php</title>
</head>
<body>

<!-- <?php 
$nom = "David";
$prenom = "Coco";
function fake($nom, $prenom) {
    echo "Petit $nom de $prenom";
}
fake($nom, $prenom)
?> -->

<!-- <?php 
function moreGreat($nomber1, $number2) {
    if ($nomber1 > $number2) {
        echo "Le premier est plus grand";
    } else if ($nomber1 == $number2) {
        echo "Les deux sont identiques";
    } else {
        echo "Le premier est plus petit";
    }
}
moreGreat(12, 22)
?> -->

<!-- <?php 
function concact($number, $string) {
    echo "Autand de $number et autand de $string";
}
concact(12, "coucou coucou")
?> -->

<!-- <?php
function setAge($name, $prenom, $age) {
    echo "Bonjour $name $prenom tu as $age ans";
}
setAge("david", "croquette", 12)
?> -->

<!-- <?php 
function gender($ageB, $genreB) {
$age = "mineur";
$genre = "un homme";
if ($ageB > 18){
    $age = "majeur";
}
if($genreB != "homme") {
    $genre = "une femme";
}
echo "Vous êtes $genre et vous êtes $age";
}
gender(16, "homme");
?> -->

<?php 
function somme($val1 = 20, $val2 = 50, $val3 = 300) {
    echo ($val1 + $val2 + $val3);
}

somme();
?>

</body>
</html>