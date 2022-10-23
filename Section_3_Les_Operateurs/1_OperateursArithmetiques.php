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
    <h2>Les opérateurs arithmétiques</h2>

    <?php
    $x = 3;
    $y = 12;

    $a = 25;
    $b = 15;
    echo 'Addition : $x=3 et $y = 12 : <br>';
    echo $x + $y."<br><br>";

    echo 'Soustraction : $x=3 et $y = 12 : <br>';
    echo $x - $y."<br><br>";

    echo 'Multiplication : $x=3 et $y = 12 : <br>';
    echo $x * $y."<br><br>";

    echo 'Division : $x=3 et $y = 12 : <br>';
    echo $x / $y."<br><br>";

    echo 'Modulo : $a=25 et $y = 12 : <br>';
    echo "Le modulo est le reste de la division, il s'écrit avec le signe %. Ici, le reste est 1 <br>";
    echo $a % $y."<br><br>";

    echo 'Modulo : $a=25 et $b = 15 : <br>';
    echo "Ici, le reste est 10 <br>";
    echo $a % $b."<br><br>";

    echo 'Puissance : $x=3 et $y = 12 : <br>';
    echo "La puissance s'écrit avec deux etoiles **.<br>";
    echo $x ** $y."<br><br>";

    ?>
</body>

</html>