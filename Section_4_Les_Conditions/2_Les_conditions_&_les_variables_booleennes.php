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
    <h2>Les Variables Booléennes</h2>
    <!-- <p>Pour afficher les informations d'une variable ou d'une expression en terme de vérité des opérateurs de
        comparaison, <br>
        on va utiliser la fonction var_dump().</p> -->
    <?php
    echo '<strong>On déclare $doss_select = true, Si la valeur de la variable est True alors Nous avons le plaisir... s\'affiche".<br></strong>';
    echo '<strong>Sinon, nous avons le regret s\'affichera<br></strong><br>';
    $doss_select = true;
    
    if ($doss_select) {
        echo "Nous avons le plaisir de vous convoquer à passer l'audition le ...<br>";
    }else{
        echo" Nous avons le regret de vous informer que votre dossier n'a pas été retenu.<br>";
    }
    echo"<br><br>";


    echo '<strong>On déclare $doss_select = false, Si la valeur de la variable est TrueFalse alors Nous avons le plaisir... s\'affiche".<br></strong>';
    echo '<strong>Sinon, nous avons le regret s\'affichera<br></strong><br>';
    $doss_select = false;
    
    if ($doss_select) {
        echo "Nous avons le plaisir de vous convoquer à passer l'audition le ...<br>";
    }else{
        echo" Nous avons le regret de vous informer que votre dossier n'a pas été retenu.<br>";
    }
    echo"<br><br>";

    
    echo '<strong>On déclare $doss_select = false, Si la valeur de la variable est le contraire de la valeur définie alors Nous avons le plaisir... s\'affiche".<br></strong>';
    echo '<strong>Sinon, nous avons le regret s\'affichera<br></strong><br>';
    echo 'On écrit cela grâce à un <strong>"!"</strong>. Dans notre cas <strong>"if(!$doss_select)"<br></strong><br>';
    $doss_select = false;
    
    if (!$doss_select) {
        echo "Nous avons le plaisir de vous convoquer à passer l'audition le ...<br>";
    }else{
        echo" Nous avons le regret de vous informer que votre dossier n'a pas été retenu.<br>";
    }
    echo"<br><br>";
    ?>



</body>

</html>