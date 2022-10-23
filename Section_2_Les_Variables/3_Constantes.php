<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation en PHP</title>
</head>

<body>
    <h1>Les VARIABLES</h1>
    <h2>Les constantes</h2>

    <p> Une constante est une variable dont la valeur ne change pas tout au long de l'éxécution du programme.
        <br>Par convention une constante s'écrit toujours en majuscule.
        <br>Pour définir une constante, on utilise le mot clé 'define'.
        <br>Par exemple : define("CAPITALE", "Paris")
    </p>

    <?php
    define("CAPITALE", "Paris");
    define("NAISSANCE", "1997");

    echo CAPITALE;
    echo "<br>";
    echo NAISSANCE;
    echo "<br>";
    echo "Pour appeler la valeur d'une constante, il suffit d'écrire son nom en MAJUSCULE après le echo.<br><br> ";
    echo "Il existe des constantes à valeur fixe, comme true & false et des constantes dites magiques <br>";
    echo "comme __FILE__ qui affiche le chemin du répertoire dans lequel se trouve le fichier utilisé ou <br>";
    echo "__LINE__ qui affiche le N° de la ligne sur lequel se trouve cette constante."


    ?>
</body>

</html>