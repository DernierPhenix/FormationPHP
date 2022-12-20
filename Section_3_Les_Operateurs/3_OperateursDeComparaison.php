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
    <p>Pour afficher les informations d'une variable ou d'une expression en terme de vérité des opérateurs de
        comparaison, <br>
        on va utiliser la fonction var_dump().</p>
    <?php
    echo '<strong>On déclare $x=3 et $y=10, on écrit var_dump($x < $y), et la réponse est true </strong><br>'; 
    $x = 3;
    $y = 10;
    var_dump($x < $y);
    echo"<br><br>";

    echo '<strong>On déclare $x=3 et $y=10, on écrit var_dump($x > $y), et la réponse est false </strong><br>'; 
    var_dump($x > $y);
    echo"<br><br>";

    $a = 10;
    $b = 10;
    echo '<strong>On déclare $a=10 et $b=10, on écrit var_dump($a == $b), et la réponse est true </strong><br>';
    echo '<strong> Avec le \'==\',on vérifie UNIQUEMENT l\'égalite en terme de valeur.</strong><br>';  
    var_dump($a == $b);
    echo"<br><br>";


    $c = "10";
    echo '<strong>On déclare $a=10 et $c="10", on écrit var_dump($a == $b), et la réponse est true </strong><br>';
    echo '<strong> Avec le \'==\',on vérifie UNIQUEMENT l\'égalite en terme de valeur.</strong><br>';  
    var_dump($a ==$c);
    echo"<br><br>";

    $d = 10.0;
    echo '<strong>On déclare $a=10 et $d=10.0, on écrit var_dump($a == $d), et la réponse est true </strong><br>';
    echo '<strong> Avec le \'==\',on vérifie UNIQUEMENT l\'égalite en terme de valeur.</strong><br>';  
    var_dump($a == $d);
    echo"<br><br>";


    echo '<strong>On déclare $a=10 et $b=10, on écrit var_dump($a === $b), et la réponse est true </strong><br>';
    echo '<strong> Avec le \'===\',on vérifie l\'égalite en terme de valeur ET de type ( ici integer).</strong><br>';  
    var_dump($a === $b);
    echo"<br><br>";

    echo '<strong>On déclare $a=10 et $c="10", on écrit var_dump($a === $c), et la réponse est false </strong><br>';
    echo '<strong> Avec le \'===\',on vérifie l\'égalite en terme de valeur ET de type ( ici integer pour $a mais string pour $c).</strong><br>';  
    var_dump($a === $c);
    echo"<br><br>";

    echo '<strong>On déclare $a=10 et $d=10.0, on écrit var_dump($a === $d), et la réponse est false </strong><br>';
    echo '<strong> Avec le \'===\',on vérifie l\'égalite en terme de valeur ET de type ( ici integer pour $a mais double pour $d).</strong><br>';  
    var_dump($a === $d);
    echo"<br><br>";

    echo '<strong>On déclare $x=3 et $y=10, on écrit var_dump($x != $y), et la réponse est true </strong><br>';
    echo 'Avec le \'!=\',on demande si la valeur de $x est différente de $y<br>';
    var_dump($x != $y);
    echo"<br><br>";

    echo '<strong>On déclare $a=10 et $y=10, on écrit var_dump($a != $y), et la réponse est false </strong><br>';
    echo '<strong> Avec le \'!=\',on demande si la valeur de $a est différente de $y </strong><br>';
    var_dump($a != $y);
    echo"<br><br>";

    echo '<strong>On déclare $a=10 et $y=10, on écrit var_dump($a !== $y), et la réponse est false </strong><br>';
    echo 'Avec le \'!==\',on demande si la valeur ET le type de $a sont différents de la valeur et du type de $y<br>';
    var_dump($a !== $y);
    echo'<br>';
    echo 'La valeur et le type de $a ne sont pas différents de la valeur et du type de $y.'; 
    echo"<br><br>";
    
    echo '<strong>On déclare $a=10 et $d=10.0, on écrit var_dump($a !== $d), et la réponse est True </strong><br>';
    echo 'Avec le \'!==\',on demande si la valeur ET/OU le type de $a sont différents de la valeur et du type de $d<br>';
    var_dump($a !== $d);
    echo'<br>';
    echo 'La valeur et/ou le type de $a sont bien différents de la valeur et/ou du type de $d.'; 
    echo"<br><br>";

    echo '<strong>Opérande SPACESHIP \'<=>\' : </strong><br>';
    echo 'Cette opérande retourne 3 valeurs : -1, 0, 1. (Pour négatif, nul et positif) <br>';
    echo 'On déclare $x=3 et $y=10, on écrit var_dump($x <=> $y)<br>';
    var_dump($x <=> $y);
    echo ' Ici on aura int(-1) car le résultat de 3 - 10 est négatif <br>';
    echo"<br><br>";

    echo '<strong>On déclare $a=10 et $y=10, on écrit var_dump($a <=> $y) </strong><br>';
    var_dump($a <=> $y);
    echo'<br>';
    echo ' Ici on aura int(0) car le résultat de 10 - 10 est nul <br>';
    echo"<br><br>";

    echo '<strong>On déclare $a=10 et $x=3, on écrit var_dump($a <=> $x) </strong> <br>';
    var_dump($a <=> $x);
    echo'<br>';
    echo ' Ici on aura int(1) car le résultat de 10 - 3 est positif <br>';
    echo"<br><br>";


    $e = NULL;
    echo '<strong>Opérande ?? : </strong><br>';
    echo 'Cette opérande retourne la valeur de la 1ère opérande si elle n\'est pas null sinon ce sera la valeurde la 2nd opérande <br>';
    echo 'On déclare $e=NULL et $y=10, on écrit var_dump($e ?? $y)<br>';
    var_dump($e ?? $y);
    echo ' Ici on aura int(10) car $e est NULL <br>';
    echo"<br><br>";

    $f = "Jean";
    echo 'On déclare $f= "Jean" et $y=10, on écrit var_dump($f ?? $y)<br>';
    var_dump($f ?? $y);
    echo ' Ici on aura int(4) Jean car $f n\'est pas NULL <br>';
    echo"<br><br>";
    ?>



</body>

</html>