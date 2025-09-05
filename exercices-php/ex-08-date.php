<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Date</title>
</head>
<body>
    <h1>Date</h1>

    <h2>Exercice 1</h2>
    <?php
    $today = date('d/m/Y');
    echo "<p>$today</p>"
    ?>

    <h2>Exercice 2</h2>
    <?php
    $date = new DateTime('2024/08/08');
    echo "<p>" . $date->format('d/m/Y') . "</p>";
    ?>

    <h2>Exercice 3</h2>
    <?php
    ?>
</body>
</html>