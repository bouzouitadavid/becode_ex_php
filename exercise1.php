<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les variables php</title>
</head>
<body>
<!-- Ex 1 -->
<!-- <?php 
$nom = "pépé";
$prenom = "dodo";
$age = 45;
echo "Bonjour $prenom, enfant $nom atteint le level $age"
?> -->

<!-- Ex 2 -->
<!-- <?php
$km = 50; 
$km = 3; 
$km = 125; 
echo $km;
?> -->

<!-- Ex 3 -->
<!-- <?php
$name = "papa";
$km = 50;
$maison = 34.5;
$ouvert = true;
?> -->

<!-- Ex 4 -->
<!-- <?php 
$name = "";
echo $name;
$name = "dadi";
echo $name;
?> -->

<!-- Ex 5 -->
<!-- <?php 
$cal1 = (3 + 4);
$cal2 = (5 * 20);
$cal3 = (45 / 5);
echo "$cal1 $cal2 $cal3";
?> -->

<!-- Ex 6 -->
<?php
$prix = 785;
$ristourne = 30;
$result = $prix*$ristourne/100;
$result = $prix - $result;
echo "$prix $ristourne $result"
?>
</body>
</html>