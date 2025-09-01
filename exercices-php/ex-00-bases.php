<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
</head>
<body>
    <?php
            // Exercice 1 :
        echo '<p>Hello World, Bienvenue sur mon premier script PHP</p>';
    ?>

    <?php
            // Exercice 2 :
        echo '<p>Bonjour tout le monde !</p>', '<br>';
        print '<p>Aujourd\'hui, nous sommes le 01/09/2025 <br></p>';
    ?>

    <?php
        // Exercice 3 :
    ?>
    <p>Bonjour j'aime vraiment beaucoup les licornes;</p>
    <?php
        echo '<p>Ce texte est affiché depuis PHP;</p>';
    ?>

    <?php
            // Exercice 4 :

        // L'exercice 2 consiste à 

        /* 
        La différence entre echo et print est minime,
        echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
        quelques mots" et ne retourne rien)

        print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
        true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
        valeur de vraioufaux sera true (1));
        */
    ?>

    <?php

        // Exercice 5 :

        $nom = 'Neutron';
        $age = 10;
        $personne = [$nom,$age];

        // OU

        /* $personne = [
            'nom' => 'Laura', 
            'age' => 38, 
        ]; */

        print_r($personne);
    ?>


    <?php
            // Exercice 6 :

        $nombre = 667;
        $str = 'Ekip';

        var_dump($nombre);
        var_dump($str);
    ?>

    <?php
            // Exercice 7 :
        echo '<p>Son nom est <b>Jimmy Neutron</b> et <i>il fait partie</i> de <u>l\'ekip : 667</u></p>';
    ?>

    <?php
            // Exercice 8 :
        echo'<div><h1>Bienvenue</h1><h2> sur mon application </h2></div>';

        // "Bienvenue" et "sur mon application" apparaissent respectivement dans un h1 et un h2.
    ?>



    <?php
        // Exercice 9 :
    ?>

    <?php
        $date = date('d/m/Y')
    ?>
    <h1>Tout a commencez avec un mystérieux bracelet</h1>
    <h2>C'est super d'avoir d'super pouvoirs à son poignet</h2>
    <p>Il est tellement cool qu'avec lui on n's'ennuie jamais <?php echo $date ?></p>

    <?php
            // exercice 10
        $message = "BEN 10";
        echo '<h1>' . $message . '</h1>';
    ?>


</body>
</html>