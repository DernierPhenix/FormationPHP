<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation en PHP</title>
</head>

<body>
    <h1>Les Opérateurs</h1>
    <h2>Les opérateurs d'affectation</h2>

    <?php
    $x = 17;
    $x+=3;

    echo 'Addition : On déclare $x=17 et puis en-dessous on écrit $x+=3, on obtient : <br>';
    echo $x."<br><br>";

    $y = 15;
    $y-=6;
    echo 'Soustraction : On déclare $y=15 et puis en-dessous on écrit $y-=6, on obtient : <br>';
    echo $y."<br><br>";

    $z=5;
    $z*=12;
    echo 'Multiplication : On déclare $z=5 et puis en-dessous on écrit $z*=12, on obtient : <br>';
    echo $z."<br><br>";

    $a=144;
    $a/=12;
    echo 'Division : On déclare $a=144 et puis en-dessous on écrit $a/=12, on obtient : <br>';
    echo $a."<br><br>";

    $b=18;
    $b%=4;
    echo 'Modulo : On déclare $b=18 et puis en-dessous on écrit $b+=4, on obtient : <br>';
    echo $b."<br><br>";

    $c=9;
    $c**= 3;
    echo 'Puissance : On déclare $c=9 et puis en-dessous on écrit $c+=3, on obtient : <br>';
    echo $c."<br><br>";
    ?>

    <h2>Les opérateurs de concaténation</h2>

    <?php
    $expression= "Je m'appelle ";
    $expression .= "Jean-Pierre";
    echo 'Concaténation : On déclare $expression= "je m\'appelle" et puis en-dessous on écrit $expression .=\'Jean-Pierre\', on obtient : <br>';
    echo $expression."<br><br>";
    ?>
</body>

</html>