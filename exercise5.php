<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les tabeaux php</title>
</head>
<body>
<!-- <?php 

$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
echo implode(", ",$mois)."<br>";;

echo $mois[3]."<br>";
echo $mois[5]."<br>";
$mois[7] = "août";
echo implode(", ", $mois)."<br>";
?> -->

<!-- <?php 
$departement = array(
    01 => "Ain",
    03 => "Allier",
    07 => "Ardèche",
    15 => "Cantal",
    26 => "Drôme ",
    38 => "Isère",
    42 => "Loire",
    43 => "Haute-Loire",
    63 => "Puy-de-Dôme",
    69 => "Rhône",
    73 => "Savoie",
    74 => "Haute-Savoie",
);
echo $departement[69];
$departement[57] = "Metz";
echo $departement[57];
foreach ($departement as $key => $value) {
    echo "le déparatement $value a le numéro $key <br>";
}
?> -->

<?php 
$array = ["Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou"];
for ($i=0; $i < count($array); $i++) { 
    echo "Salut $array[$i], devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)"."<br>";
}

?>
</body>
</html>