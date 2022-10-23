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
    <h2>Les types de variables:</h2>
    <p>Pour écrire des commentaires dans le code, il faut mettre // pour un commentaire sur une seule ligne</p>
    <p>et /* commentaire */ si le commentaire est sur plusieurs lignes</p>
    <?php
    echo "Les chaînes de caractères ou String : <br>";
    $text ="Je vais apprendre le PHP";
    echo 'Le type de la variable $text est : ';
    echo gettype($text)."<br>";
    echo " Pour afficher le type de la variable, on utilise la fonction gettype : gettype(nomDeLaVariable).<br><br>";

    echo"Les integer, double, booléens.<br>";
    $age = 25;
    echo 'Le type de la variable $age est : ';
    echo gettype($age)."<br>";

    $prix = 45.2;
    echo 'Le type de la variable $prix est : ';
    echo gettype($prix)." / Nombre à virgule(avec le point)<br>";

    $verite = true;
    echo 'Le type de la variable $verite est : ';
    echo gettype($verite)."<br>";
    

    ?>
</body>

</html>