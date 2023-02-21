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
    <h2>Les Conditions Imbriquées</h2>
    <!-- <p>Pour afficher les informations d'une variable ou d'une expression en terme de vérité des opérateurs de
        comparaison, <br>
        on va utiliser la fonction var_dump().</p> -->
    <?php

    echo "<h3>Pour voir le programme de chaque cas (LE CODE), consulter le contenu de la page PHP</h3>";

    echo "<h3>1er cas : </h3>";

    echo "<strong>On définit une variable adhérent = true et un âge dans une autre variable = 25.<br></strong>
            Si adhérent = true & l'âge est <= à 21 ans alors reduction 50%. Sinon adherent = true & l'âge >=21 alors réduction de 20%.<br>
            Sinon, vous n'êtes pas adhérent donc pas de réduction<br>";

    $adherent = true;
    $age = 25;

    if ($adherent) {
        if ($age >= 21) {
            echo "Vous êtes adhérent. Votre âge vous permet de bénéficier d'une réduction de 20%<br> ";
        } else {
            echo "Vous êtes adhérent. Votre âge vous permet de bénéficier d'une réduction de 50%<br>";
        }
    } else {

        echo "Vous n\'êtes pas adhérent, vous ne bénéficiez pas de réduction.";
    }

    echo "<br><br>";

    echo "<h3>2ème cas : </h3>";

    echo "<strong>On définit une variable adhérent = true et un âge dans une autre variable = 18.<br></strong>
            Si adherent = true & l'âge est <= à 21 ans alors reduction 50%. Sinon adherent = true & l'âge >=21 alors réduction de 20%.<br>
            Sinon, vous n'êtes pas adhérent donc pas de réduction<br>";

    $adherent = true;
    $age = 18;

    if ($adherent) {
        if ($age >= 21) {
            echo "Vous êtes adhérent. Votre âge vous permet de bénéficier d'une réduction de 20%<br>";
        } else {
            echo "Vous êtes adhérent. Votre âge vous permet de bénéficier d'une réduction de 50%<br>";
        }
    } else {

        echo "Vous n\'êtes pas adhérent, vous ne bénéficiez pas de réduction.";
    }
    echo "<br><br>";

    echo "<h3>3ème cas : </h3>";

    echo "<strong>On définit une variable adhérent = false et un âge dans une autre variable = 18.<br></strong>
            Si adherent = true & l'âge est <= à 21 ans alors reduction 50%. <br>
            Sinon adherent = true & l'âge >=21 alors réduction de 20%.<br>
            Sinon, vous n'êtes pas adhérent donc pas de réduction<br>";

    $adherent = false;
    $age = 18;

    if ($adherent) {
        if ($age >= 21) {
            echo "Vous êtes adhérent. Votre âge vous permet de bénéficier d'une réduction de 20%<br>";
        } else {
            echo "Vous êtes adhérent. Votre âge vous permet de bénéficier d'une réduction de 50%<br>";
        }
    } else {

        echo "Vous n'êtes pas adhérent, vous ne bénéficiez pas de réduction.<br>";
    }
    echo "<strong>Ici adherent étant définit à false, quelque soit l'âge nous aurons toujours la même réponse</strong><br><br>";

    ?>
</body>

</html>