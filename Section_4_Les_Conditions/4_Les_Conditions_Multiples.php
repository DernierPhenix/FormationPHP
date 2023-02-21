<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>

<body>
    <h1>Les Conditions Multiples</h1>
    <?php
    echo "<p>Les conditions multiples utilisent les opérateurs logiques suivants : <br></p>
                <ul>
                    <li>AND : && (ET) => Ici les deux conditiond doivent être vraies pour éxecuter le programme</li>
                    <li>OR : || (OU) => Ici au moins une des deux conditions doit être vraies pour éxecuter le programme</li>
                    <li>XOR : => Ici il faut qu'au moins une des deux conditions soit <strong>EXACTEMENT</strong> vraies pour éxecuter le programme</li>
                </ul>";

    echo "<h3>Pour voir le programme de chaque cas (LE CODE), consulter le contenu de la page PHP</h3>";

    echo "<h3>1er cas : Opérateur AND</h3>";

    echo "X & Y sont 2 variables. x = 13 et y = 20. La condition est la suivante : Si X < Y AND Y%2 == 0 alors première réponse, sinon la seconde réponse.<br>
        Ici c'est la 1ère réponse.<br>";
    $x = 13;
    $y = 20;
    if ($x < $y && $y % 2 == 0) {
        echo "<strong>les deux conditions sont vraies.</strong>";
    } else {
        echo "Au moins une des conditions est fausse.";
    }

    echo "<br><br>";

    echo "A & B sont 2 variables . a = 75 et b = 20. La condition est la suivante : Si A < B AND B%2 == 0 alors première réponse, sinon la seconde réponse.<br>
        Ici c'est la 2ème réponse.<br>";
    $a = 75;
    $b = 20;
    if ($a < $b && $b % 2 == 0) {
        echo "les deux conditions sont vraies.";
    } else {
        echo "<strong>Au moins une des conditions est fausse.</strong>";
    }

    echo "<h3>2ème cas : Opérateur OR</h3>";

    echo "X & Y sont 2 variables. x = 13 et y = 20. La condition est la suivante : Si X > Y || Y%2 == 0 alors seconde réponse, sinon la première réponse.<br>
        Ici c'est la 2nd réponse.<br>";
    $x = 13;
    $y = 21;
    if ($x > $y || $y % 2 == 0) {
        echo "Au moins une des conditions est vraie.";
    } else {
        echo "<strong>Les deux conditions sont fausses.</strong>";
    }

    echo "<br><br>";

    echo "A & B sont 2 variables . A = 75 et B = 20. La condition est la suivante : Si A < B OU B%2 == 0 alors première réponse, sinon la seconde réponse.<br>
        Ici c'est la 1ère réponse.<br>";
    $a = 75;
    $b = 20;
    if ($a < $b || $b % 2 == 0) {
        echo "<strong>Au moins une des conditions est vraie.</strong>";
    } else {
        echo "Les deux conditions sont fausses.";
    }

    echo "<br><br>";

    echo "C & D sont 2 variables . C = 75 et D = 20. La condition est la suivante : Si C < D OU D%2 == 0 alors première réponse, sinon la seconde réponse.<br>
        Ici c'est la 1ère réponse.<br>";
    $c = 17;
    $d = 20;
    if ($c < $d || $d % 2 == 0) {
        echo "<strong>Au moins une des conditions est vraie.</strong>";
    } else {
        echo "Les deux conditions sont fausses.";
    }

    echo "<h3>3ème cas : Opérateur XOR</h3>";

    echo "X & Y sont 2 variables. x = 13 et y = 21. La condition est la suivante : Si X > Y || Y%2 == 0 alors première réponse, sinon la seconde réponse.<br>
        Ici une seule des conditions est vraie. Donc c'est la 1ère réponse qui sera choisie.<br>";
    $x = 13;
    $y = 20;
    if ($x > $y xor $y % 2 == 0) {
        echo "<strong>L'une des conditions est EXACTEMENT vraie.</strong>";
    } else {
        echo "Soit les 2 conditions sont vraies, soit elles sont fausses.";
    }

    echo "<br><br>";

    echo "X & Y sont 2 variables. x = 13 et y = 21. La condition est la suivante : Si X < Y || Y%2 == 0 alors première réponse, sinon la seconde réponse.<br>
        Ici, les 2 conditions sont vraies. Donc c'est la 2ème réponse qui sera choisie.<br>";
    $x = 13;
    $y = 20;
    if ($x < $y xor $y % 2 == 0) {
        echo "L'une des conditions est EXACTEMENT vraie.";
    } else {
        echo "<strong>Soit les 2 conditions sont vraies, soit elles sont fausses.</strong>";
    }

    ?>
</body>

</html>