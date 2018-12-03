<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les boucles php</title>
</head>
<body>
<!-- <?php
$i = 0;
while($i < 10) {
    $i++;
    echo $i;
}
?>

<?php
// boucle while best
$chiffreSec = 20;
for ($chiffrePrem=0; $chiffrePrem < 20; $chiffrePrem++) { 
    echo ($chiffrePrem * $chiffreSec) . "<br>";
}
?>

<?php 
$val2 = 50;
for ($val1=100; $val1 < 10 ; $val1--) { 
    echo ($chiffrePrem * $chiffreSec) . "<br>";
}
?>

<?php 
$val1 = 1;
while ($val1 <= 10) {
    echo "<br>";
    echo $val1 = ($val1) + ($val1 / 2);
}
?> -->

<!-- <?php 
// 14
for ($i=1; $i < 15; $i++) { 
    echo "On y arrive presque $i <br>";
}
?>

<?php 
// 20
for ($i=20; $i > 0; $i--) {
    echo "C'est presque bon $i <br>";
}
?>

<?php 
// 7
$a = 0;
for ($i=1; $a < 100; $i++) {
    $a += 15;
    echo "On tient le bon bout $i <br>";
}
?> -->

<?php 
// 17
$a = 200;
for ($i=1; $a > 0; $i++) { 
    $a -= 12;
    echo "enfin $i <br>";
}
?>
</body>
</html>