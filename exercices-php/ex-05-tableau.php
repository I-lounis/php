<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Tableau</title>
</head>
<body>
    <h1>Tableau</h1>

    <h2>Exercice 1</h2>

    <?php
        // TN = Tortue Ninja
        $t1 = ['TN1','TN2','TN-La Légende','TN-Le Retour','TN-Le retour de la légende'];

        var_dump($t1);
    ?>

    <h2>Exercice 2</h2>

    <?php
        $t2 = [
            'prénom' => 'Donatello',
            'nom' => 'San',
            'age' => 17
        ];
        
        echo "<p> $t2[prénom] est son prénom.</p>";
        echo "<p> $t2[nom] est son nom.</p>";
        echo "<p> Il à $t2[age] ans.</p>";
    ?>
    

    <h2>Exercice 3</h2>
    
    <?php
        $ville = ['ville1','ville2','ville3','ville4'];
        echo '<p>Le tableau ville contient : ' . count($ville) . ' villes</p>';
    ?>

    <h2>Exercice 4</h2>

    <?php
        $mois = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];

        for($i = 0; $i < sizeof($mois); $i++){
            $moisAff = $mois[$i];
            echo "<p>$moisAff</p>";
        }

    ?>

    <h2>Exercice 5</h2>
    
    <?php
        /*
        $animalcries = [
            0 => [
                'nom' => 'Abeille',
                'cri' => 'vrombir'
            ],
            1 => [
                'nom' => 'Aigle',
                'cri' => 'glatir'
            ],
            2 => [
                'nom' => 'Alouette',
                'cri' => 'grisoller'
            ],
            3 => [
                'nom' => 'Cerf',
                'crie' => 'bramer'
            ]
        ]; 


        for($i = 0; $i < sizeof($animalcries); $i++){
            $animalAff = $animalcries[$i]['nom'];
            echo "<p>$animalAff</p>";
        } 
        
        */

        
        $animalcries = [
            'abeille' => 'vrombir',
            'aigle' => 'glatir',
            'alouette' => 'grisoller',
            'cerf' => 'bramer'
        ];

        foreach ($animalcries as $key => $value) {
            echo "<p> $key => $value </p>";
        };

    ?>
</body>
</html>