<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice constante</title>
</head>
<body>

<h1>Exercices constante</h1>

<h2>Exercice 1</h2>

<?php
 // Exercice 1 : Déclaration et utilisation de constantes

define('PI','3.14159 ');
echo "<p>" . PI . "</p>";
?>

<h2>Exercice 2</h2>

<?php
// Exercice 2 : Calcul avec des constantes

define('LARGEUR', 13);
define('LONGUEUR', 17);
$total = LARGEUR * LONGUEUR;

echo "<p> $total </p>";
?>

<h2>Exercice 3</h2>

<?php
// Exercice 3 : Constantes Magiques
echo "<p>" .  __FILE__ . "</p>";
?>

<h2>Exercice 4</h2>

<?php
// Exercice 4 : Combinaison de constantes et variables

define('PREFIXE','Bonjour');

$debut = 'tout';
$milieu = 'le';
$fin = 'monde';

echo '<p>'. PREFIXE . ' ' . $debut . ' ' . $milieu . ' ' . $fin .'</p>';

echo "<p>". PREFIXE . " $debut $milieu $fin</p>";
?>

<h2>Exercice 5</h2>

<?php
// Exercice 5 : Substitution de variables

define('SUJET','La France');
$capitale = 'Paris';

echo '<p>'. 'La capitale de  '. SUJET . ' est ' . $capitale .'</p>';
?>

<h2>Exercice 6</h2>

<?php
// Exercice 6 : Utilisation de constantes et de variables dans un calcul

define('TAUX_TVA',0.2);

$prix_ht = 10;
$tva = TAUX_TVA * $prix_ht;
$prix_ttc = $tva + $prix_ht;

echo '<p>' . 'Le prix TTC est :' . $prix_ttc  .  '</p>';
?>

<h2>Exercice 7</h2>

<?php
// Exercice 7 : Conversation de devises 

define('EURO_VERS_USD',1.2);
$euros = 17;
$convDollars = 17 * EURO_VERS_USD;

echo "<p> $convDollars </p>";
?>

<h2>Exercice 8</h2>

<?php
// Exercice 8 : Utilisation des constantes et variables avec opérateurs logique

define('SEUL','10');
$nbrandom = rand(0,20);

if(SEUL > $nbrandom) {
    echo '- que SEUL';
} else {
    echo '+ que SEUL';
};
?>

<h2>Exercice 9</h2>

<?php
// Exercice 9 : Création d'URL dynamiques

define('URL_SITE','https://www.ninjaturtles-lefilm.fr/');
$urlfile = 'home/';

echo "<p>". URL_SITE . "$urlfile </p>";
?>

<h2>Exercice 10</h2>

<?php
// Exercice 10 : Comparaison de deux variables avec des constantes

define('AGE_LEGAL',18);
$age = rand(1,99);

if(AGE_LEGAL < $age){
    echo '+18';
} else {
    echo '-18';
};
?>
</body>
</html>
