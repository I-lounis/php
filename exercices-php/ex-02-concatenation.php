<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Concaténation</title>
</head>
<body>

<h1>Exercices concaténation</h1>
    

<h2>Exercice 1</h2>

<?php
// Exercice 1 : Concaténation simple

$nom = 'De-Kamui';
$prenom = 'Tobijandro';

echo '<p>'. $prenom . ' ' . $nom .'</p>'
?>


<h2>Exercice 2</h2>

<?php
// Exercice 2 : Concatenation avec des phrases

$phrase1 = 'Le ciel est';
$phrase2 = "bleu aujourd'hui";

echo '<p>' . $phrase1 . ' ' . $phrase2 . '</p>';
?>

<h2>Exercice 3</h2>

<?php
// Exercice 3 : Utilisation de virgules dans echo

$mot1 = "J'aime";
$mot2 = 'le';
$mot3 = 'PHP';

echo '<p>'. $mot1 . ' ' . $mot2 . ' ' . $mot3 .'</p>';
?>


<h2>Exercice 4</h2>

<?php
// Exercice 4 : Concatenation avec l'opérateur combiné ".="

$wego = 'je vais';

echo '<p>'. $wego . ' ' . 'à la plage' .'</p>';
?>


<h2>Exercice 5</h2>

<?php
// Exercice 5 : Echapper les guillemets

$citation = 'Il a dit : "Le PHP est fantastique"';

echo '<p>'. $citation .'</p>';
?>


<h2>Exercice 6</h2>

<?php
// Exercice 6 : Quotes simples et doubles

$mot = 'PHP';

echo "le mot est : $mot";

// echo 'le mot est : $mot'
?>


<h2>Exercice 7</h2>

<?php
// Exercice 7 : Utilisation de variables dans les chaines

$nom2 = "Donatello";

echo "Bonjour, $nom2 , bienvenue sur notre site!";
?>


<h2>Exercice 8</h2>

<?php
// Exercice 8 : Concaténation et guillemets

$citation2 = 'la vie est belle à dos de licorne';

echo "<p>$citation2  ', surtout quand on code en PHP!'</p>"
?>

<h2>Exercice 9</h2>

<?php
// Exercice 9 : Concaténation et opérations mathématique

$a = 5;
$b = 10;

echo '<p>'. 'La somme de ' . $a . ' et ' . $b . ' ' . 'est ' . $a + $b .'</p>';
?>

</body>
</html>