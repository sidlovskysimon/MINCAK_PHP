<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premenné</title>
</head>
<body>
    <h1>Tento web je zameraný na premenné</h1>

    <?php
    echo "<p>" . (2 + 4) . "</p>";

    // Premenná uchováva hodnotu, ku ktorej sa pristupuje jej názvom.
    $cislo = 5;
    echo $cislo;

    echo "<br>";
    $desCislo = 4.2;
    echo $desCislo;

    echo "<br>";
    $cislo1 = 4.3;
    $cislo2 = 2.7;

    // Pretypovanie čísel z float na int pred sčítaním.
    $vysledok = (int) $cislo1 + (int) $cislo2;
    echo $vysledok;
    echo "<br>";

    $textCislo = "Toto je moje číslo: " . $cislo1;
    echo $textCislo;
    echo "<br>";

    $pravdivost = true;
    echo $pravdivost;
    ?>
</body>
</html>