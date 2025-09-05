<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Conditions</title>
</head>
<body>
    <h1>Conditions</h1>
    <h2>Exercice 1</h2>

    <?php
        $age = 21;

        if (is_int($age) && ($age > 0) && ($age < 120)){
            echo "<p> L'âge est valide.</p>";
        } else {
            echo "<p> L'âge n'est pas valide.</p>";
        };
    ?>

    <h2>Exercice 2</h2>

    <?php
        $jour = 4;

        switch($jour){

            case 1 :
                echo "<p>On est lundi.</p>";
            break;

            case 2 :
                echo "<p>On est mardi.</p>";
            break;

            case 3 :
                echo "<p>On est mercredi.</p>";
            break;

            case 4 :
                echo "<p>On est jeudi.</p>";
            break;

            case 5 :
                echo "<p>On est vendredi.</p>";
            break;

            case 6 :
                echo "<p> On est samedi.</p>";
            break;    
            
            case 7 :
                echo "<p>On est dimanche </p>";
            break;        
        };
    ?>

    <h2>Exercice 3</h2>

    <?php
        $t1 = 1;
        $t2 = 1;

        if($t1 === $t2){
            echo "<p> Vrai </p>";
        } else {
            echo "<p> Faux </p>";
        };

        $result = ($t1 === $t2) ? '$t1 est égal à $t2' : '$t1 est différent de $t2';
        echo "<p>$result</p>";
    ?>

    <h2>Exercice 4</h2>

    <?php
    $var1 = 2;
    if(isset($var1)){
        echo "<p> $var1 </p>";
    } else {
        echo "vide";
    };
    ?>

    <h2>Exercice 5</h2>
    <?php
    $nom = '';
    
    ?>
</body>
</html>