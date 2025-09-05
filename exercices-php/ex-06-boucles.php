<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Boucles</title>
</head>
<body>
    <h1>Boucles</h1>

    <h2>Exercice 1</h2>
    <?php
        $i = 0;
        while ($i <= 20) {
            $i++;

        if ($i % 2 == 0) {
            echo "<p> $i est un numéro pair.</p>";
        }
    };  
    ?>

    <h2>Exercice 2</h2>
    <?php
        $i = 2000;
        while($i <= 2025){
            echo "<p> <ul><li>$i</li></ul> </p>";
            $i++;
        };
    ?>

    <h2>Exercice 3</h2>
    <?php
        /*
        $m = 0;
        do{
            echo "<p>$m</p>";
            $m += 3;
        }while($m <= 30)
        */

        $number = 1;
        do{
            if($number % 3 == 0){
                echo "<p>$number</p>";
            }
            $number++;
        }while($number <= 30);
    ?>

    <h2>Exercice 4</h2>
    <?php
        $t1 = [
            'prenom' => 'Ulysse',
            'nom' => '31',
            'email' => 'ulysse31@univers.fr ',
            'age' => '24'
        ];

        foreach($t1 as $key => $value){
            if($key == 'email'){
                echo "<a href = 'mailto : $value'>$value</a>";
            } else {
                echo "<p> $key : $value </p>";
            };
        };
    ?>

    <h2>Exercice 5</h2>
    <?php
        echo "<table border ='2'>";
        for ($i = 0;$i <10 ; $i++){
            echo"<tr>";
            for($j = 0; $j < 10 ; $j++){
                $number = rand(1,100);
                if($number % 2 == 0){
                    echo "<td style ='background-color: green;'> $number</td>";
                }else{
                    echo "<td>$number</td>";
                }
                
            }
            echo "</tr>";
        }
        echo"</table>";
    ?>

    <h2>Exercice 6</h2>
    <?php
        $t2 = [
            0 => [
                'prenom' => 'Napo', 
                'nom' => 'KangooJuniors', 
                'age' => '7'
            ],
            1 => [
                'prenom' => 'Nelson', 
                'nom' => 'KangooJuniors', 
                'age' => '7'
            ],
            2 => [
                'prenom' => 'Archie', 
                'nom' => 'KangooJuniors', 
                'age' => '7', 
            ],
            3 => [
                'prenom' => 'Kevin', 
                'nom' => 'KangooJuniors', 
                'age' => '7', 
            ],
            4 => [
                'prenom' => 'Junior', 
                'nom' => 'KangooJuniors', 
                'age' => '7', 
            ]
        ];

        /*
        for($i = 1; $i < count($t2); $i++){
            $t2Aff = $t2[$i]['prenom'];
            $t2Aff2 = $t2[$i]['nom'];
            $t2Aff3 = $t2[$i]['age'];
            echo 
            "<p> 
            <li> Personne : $i </li>
            <ul>
            <li> prénom : $t2Aff </li>
            <li> nom : $t2Aff2 </li>    
            <li> age : $t2Aff3 </li>
            </p>
            </ul>
            </p>"
            ;
        };
        */

        echo "<ol>";
        foreach($t2 as $key => $value){
            echo "<li>Personne n° $key </li>";

            echo "<ul>";
            foreach($value as $k => $v){
                echo "<li>$k : $v </li>";
            }
            echo "</ul>";
        }
        echo "</ol>";
    ?>
    
</body>
</html>