<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation en PHP</title>
</head>

<body>
    <h1>Les Conditions</h1>
    <h2>Le If, ElseIf et le Else</h2>
    <!-- <p>Pour afficher les informations d'une variable ou d'une expression en terme de vérité des opérateurs de
        comparaison, <br>
        on va utiliser la fonction var_dump().</p> -->
    <?php
    echo '<strong>On déclare $x=20 et $y=30, on écrit : <br>if ($x < $y){<br>echo "La variable X est inférieure à la variable Y";<br>}; </strong><br>';
    echo 'On va comparer les valeurs et SI $x est inférieur à $y alors on affiche un texte<br>';
    $x = 20;
    $y = 30;
    if ($x < $y) {
        echo "La variable X est inférieure à la variable Y";
    };
    echo"<br><br>";

    echo '<strong>On déclare $a=200 et $y=30, on écrit : <br>if ($a < $y){<br>echo "La variable A est inférieure à la variable Y";<br>}; </strong><br>';
    echo 'On va comparer les valeurs et SI $x est inférieur à $y alors on affiche un texte<br>';
    $a = 200;
    $y = 30;
    if ($a < $y) {
        echo "La variable A est inférieure à la variable Y";
    };
    echo"<br>";
    echo 'Ici, nous n\'aurons aucun message car la variable A n\'est pas inférieure à la variable Y';
    echo"<br><br>";

    echo '<strong>On déclare $x=20 et $y=30, on écrit : <br>if ($x < $y){<br>echo "La variable X est inférieure à la variable Y"}<br> 
            else {<br>echo "La variable X est supérieure à la variable Y<br>}; </strong><br>';
    echo 'On va comparer les valeurs et SI $x est inférieure à $y alors on affiche un texte sinon l\'autre<br>';
   
    if ($x < $y) {
        echo "La variable X est inférieure à la variable Y";
    }else {
        echo "La variable X n'est pas inférieure à la variable Y";
    };
    echo"<br><br>";

    echo '<strong>On déclare $a=200 et $y=30, on écrit : <br>if ($a < $y){<br>echo "La variable A est inférieure à la variable Y"}<br> 
            else {<br>echo "La variable A est supérieure à la variable Y<br>}; </strong><br>';
    echo 'On va comparer les valeurs et SI $a est inférieure à $y alors on affiche un texte sinon l`\'autre<br>';
    
    if ($a < $y) {
        echo "La variable A est inférieure à la variable Y";
    }else {
        echo "La variable A est supérieure à la variable Y";
    };
    echo"<br><br>";

    echo '<strong>On déclare $note=17, SI note >17 on affichera "très bien", SINON SI note > 15 "Bien"<br>
    SINON SI note >12 "Assez Bien", SINON "Une phrase d\'encouragement" </strong><br>';
    $note = 17;
    if ($note > 17) {
        echo "Très Bien";
    }elseif ($note > 15) {
        echo "Bien";
    }elseif ($note > 12){
        echo "Assez Bien";
    }else {
        echo "Les efforts finissent toujours par payer";
    };
    echo"<br><br>";

    echo '<strong>On déclare $notes=9, SI note >17 on affichera "très bien", SINON SI note > 15 "Bien"<br>
    SINON SI note >12 "Assez Bien", SINON "Une phrase d\'encouragement" </strong><br>';
    $notes = 9;
    if ($notes > 17) {
        echo "Très Bien";
    }elseif ($notes > 15) {
        echo "Bien";
    }elseif ($notes > 12){
        echo "Assez Bien";
    }else {
        echo "Les efforts finissent toujours par payer";
    };
    echo"<br><br>";
    ?>



</body>

</html>