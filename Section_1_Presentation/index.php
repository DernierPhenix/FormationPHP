<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation en PHP</title>
</head>

<body>
    <h1>PREMIER PAS DANS LA PROGRAMMATION WEB</h1>
    <h2> Suivez le guide</h2>

    <?php
    echo "Quand on met une simple quote, s'il y a une apostrophe dans le texte il faut mette un antislash <br>";
    echo 'Je m\'appelle Jean-Pierre <br><br>';

    echo "Quand on met des guillemets, s'il y a une apostrophe dans le texte, alors pas besoin d'antislash <br> ";
    echo "Je m'appelle Jean-Pierre <br><br>";

    echo "Quand on a des guillemets et qu'on remet des guillemets dans le texte il faut un antislash avant le 1er guillemet et avant celuiqui ferme à l'intérieur <br>";
    echo "Cette formation va aborder le \"PHP\" tout au long de ces vidéos <br><br>";
    
    echo "Quand on a des simples quotes et qu'on remet des guillemets dans le texte pas besoin d'antislash à l'intérieur <br>";
    echo 'Cette formation va aborder le "PHP" tout au long de ces vidéos <br><br>';

    echo "45 est ici une chaine de caractère car entre guillemets dans le code.<br>";
    echo "45 <br><br>";
    
    echo "63 est ici un integer car pas écrit entre guillemets dans le code.<br>";
    echo 63;
    echo "<br><br>";

    echo 'Print peut remplacer "echo" dans le code mais il est de - en - utilisé<br><br>';
    print"Mon prénom est Jean-Pierre <br>";
    print'Mon prénom est Jean-Pierre <br>';
    ?>
</body>

</html>