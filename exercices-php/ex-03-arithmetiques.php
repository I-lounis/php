<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>
<body>
    <h1>Arithmetique</h1>
    <h2>Exercice 1</h2>

    <?php
        $a = 31;
        $b = 11;

        $total1 = $a + $b;
        echo "<p>Ma variable a + ma variable b = $total1</p>";

        $total2 = $a - $b;
        echo "<p>Ma variable a - ma variable b = $total2</p>";

        $total3 = $a * $b;
        echo "<p>Ma variable a x ma variable b = $total3</p>";

        $total4 = $a / $b;
        echo "<p>Ma variable a ÷ ma variable b = $total4</p>";

        $total5 = $a % $b;
        echo "<p> Le modulo de la division entre ma variable a et b = $total5</p>";
    ?>

    <h2>Exercice 2</h2>

    <?php
    $c = 72;
    $d = 4;

    $c += $d;
    echo "<p>Le total de ma variable c'est = $c</p>";

    $c -= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";

    $c *= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";

    $c /= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";

    $c %= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";
    ?>

    <h2>Exercice 3</h2>

    <?php
        $counter = 10;

        $counter++;
        echo "<p> $counter </p>";

        $counter = 10;

        $counter--;
        echo "<p> Le compteur est à : $counter</p>";
    ?>

    <h2>Exercice 4</h2>

    <?php
        $num = 10;

        $num++;
        echo "<p> $num </p>";

        $num--;
         echo "<p> $num </p>"
    ?>

    <h2>Exercice 5</h2>

    <?php
    $age = 14;

    $age++;
    $age--;

    echo "<p> J'ai actuellement : $age ans.</p>"
    ?>

    <h2>Exercice 6</h2>

    <?php
    $quantity = 5;

    $quantity += 3;
    $quantity -= 2;

    echo "<p> Le panier de l'utilisateur contient : $quantity articles.</p>"
    ?>

    <h2>Exercice 7</h2>

    <?php
    $score = 50;

    $score += 10;
    $score -= 5;

    echo "<p> Le score final est de : $score points.</p>"
    ?>

</body>
</html>