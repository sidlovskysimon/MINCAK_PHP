<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podmienky</title>
</head>
<body>
<?php
// Podmienky
/*
Podmienka je programovacia paradigma, pomocou ktorej sa rozhoduje,
ktory kod sa vykona a ktory nie.
*/
if (1 < 5) {
    echo "1 je mensie ako 5";
}

echo "<br>";

$cislo1 = 10;
$cislo2 = 50;

// == porovnava hodnotu; === porovnava hodnotu aj datovy typ.
if ($cislo1 != $cislo2) {
    echo "Toto sa vykona";
}

echo "<br>";

if ($cislo1 == $cislo2) {
    echo "Tento kod sa nevykona";
} else {
    echo "Tento kod sa vykona";
}

// Na zaklade poctu bodov vypise hodnotenie.
$pocetBodov = random_int(0, 100);

echo "<p>Pocet bodov: " . $pocetBodov . "</p>";
echo "<p>Hodnotenie: ";

if ($pocetBodov >= 90) {
    echo "1";
} elseif ($pocetBodov >= 80) {
    echo "2";
} elseif ($pocetBodov >= 70) {
    echo "3";
} elseif ($pocetBodov >= 60) {
    echo "4";
} else {
    echo "5";
}

echo "</p>";
?>
</body>
</html>