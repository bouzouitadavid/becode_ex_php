<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les conditions php</title>
</head>
<body>
<!-- EX 1-->
<!-- <?php 
$age = 18;
if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}
?> -->

<!-- EX 2 -->
<!-- <?php
// method 1
$IsEasy = false;
if ($IsEasy == true) {
    echo "C'est facile!!";
} else {
    echo "C'est difficile !!!";
}
?> -->

<!-- <?php
// method 2
$IsEasy = "C'est facile!!";
if (false) {
    $IsEasy = "C'est difficile !!!";
}
echo $IsEasy;
?> -->


<!-- EX 3 --> 
<?php 

// apres midi
// $age = 20;
// $genre->homme = "homme";
// $genre->femme = "femme";

// if($age >= 18 || $genre->homme = true) {
//     echo "majeur";
// } else {
//     echo "mineur";
// }
// ?>

<!-- EX 4 -->
<!-- <?php
$magnitude = 4;
switch ($magnitude) {
    case 0:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 1:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 2:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 3;
    case 4;
    case 5;
    case 6;
    case 7;
    case 8;
    case 9;
        echo "oulalal beaucoup trop de à écrire !!";
        break;
    default:
        echo "N'est égale à rien";
}
?> -->

<!-- EX 5 -->
<!-- <?php 
$maVariable = "homme";
if ($maVariable == "homme") {
    echo "c'est un développeur !!!";
} else {
    echo "c'est une développeuse !!!";
}
?> -->

<!-- EX 6 -->
<!-- <?php 
$monAge = 15;
if($monAge >= 18) {
    echo "tu es majeur";
} else {
    echo "tu n'es pas majeur";
}
?> -->

<!-- EX 7 & 8 -->
<?php 
$maVariable = "Is good";
if (false) {
    $maVariable = "Is not good";
} 
    echo $maVariable;
?>
</body>
</html>