<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Fonction</title>
</head>
<body>
    <h1>Fonction</h1>

    <h2>Exercice 1</h2>
    <?php
    function greet(){
        echo "<p>Hello,world !</p>";
    };
    greet();
    ?>
    
    <h2>Exercice 2</h2>
    <?php
     function greetUser($name){
        echo "<p>Hello, $name !</p>";
    };
    greetUser('Nio');
    ?>

    <h2>Exercice 3</h2>
    <?php
    function sum($a,$b){
        $result = $a + $b;
        echo "<p> Le résultat est : $result</p>";
    };
    sum(17,19);
    ?>

    <h2>Exercice 4</h2>
    <?php
    function greetWithTime($name, $timeOfDay='day'){
        echo "<p> Good $timeOfDay, $name </p>";
    };
    greetWithTime('Nio');
    ?>

    <h2>Exercice 5</h2>
    <?php
    function checkEligibility($age, $hasLicense){
        if(($age >= 18) && ($hasLicense == TRUE)){
            echo "<p> Eligible </p>";
        }else{
            echo "<p> Not Eligible </p>";
        };

    };
    checkEligibility(18, TRUE);
    ?>
</body>
</html>