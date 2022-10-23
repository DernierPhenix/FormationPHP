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
    <h2>Les opérateurs de comparaison</h2>
        <p>Pour afficher les informations d'une variable ou d'une expression en terme de vérité des opérateurs de comparaison, <br>
on va utiliser la fonction var_dump().</p>
    <?php
    echo 'On déclare $x=3 et $y=10, on écrit var_dump($x < $y), et la réponse est true <br>'; 
    $x = 3;
    $y = 10;
    var_dump($x < $y);
    echo"<br><br>";

    echo 'On déclare $x=3 et $y=10, on écrit var_dump($x > $y), et la réponse est false <br>'; 
    var_dump($x > $y);
    echo"<br><br>";

    $a = 10;
    $b = 10;
    echo 'On déclare $a=10 et $b=10, on écrit var_dump($a == $b), et la réponse est true <br>';
    echo ' Avec le \'==\',on vérifie UNIQUEMENT l\'égalite en terme de valeur.<br>';  
    var_dump($a == $b);
    echo"<br><br>";


    $c = "10";
    echo 'On déclare $a=10 et $c="10", on écrit var_dump($a == $b), et la réponse est true <br>';
    echo ' Avec le \'==\',on vérifie UNIQUEMENT l\'égalite en terme de valeur.<br>';  
    var_dump($a ==$c);
    echo"<br><br>";

    $d = 10.0;
    echo 'On déclare $a=10 et $d=10.0, on écrit var_dump($a == $d), et la réponse est true <br>';
    echo ' Avec le \'==\',on vérifie UNIQUEMENT l\'égalite en terme de valeur.<br>';  
    var_dump($a == $d);
    echo"<br><br>";


    echo 'On déclare $a=10 et $b=10, on écrit var_dump($a === $b), et la réponse est true <br>';
    echo ' Avec le \'===\',on vérifie l\'égalite en terme de valeur ET de type ( ici integer).<br>';  
    var_dump($a === $b);
    echo"<br><br>";

    echo 'On déclare $a=10 et $c="10", on écrit var_dump($a === $c), et la réponse est false <br>';
    echo ' Avec le \'===\',on vérifie l\'égalite en terme de valeur ET de type ( ici integer pour $a mais string pour $c).<br>';  
    var_dump($a === $c);
    echo"<br><br>";

    echo 'On déclare $a=10 et $d=10.0, on écrit var_dump($a === $d), et la réponse est false <br>';
    echo ' Avec le \'===\',on vérifie l\'égalite en terme de valeur ET de type ( ici integer pour $a mais double pour $d).<br>';  
    var_dump($a === $d);
    echo"<br><br>";
    ?>

</body>

</html>