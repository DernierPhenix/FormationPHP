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
    <h2>Les variables : Utilisation & Manipulation</h2>

    <?php
        $prenom ="Jean-Pierre";
        $age = 47;

        echo $prenom."<br>";
        echo $age."<br>";
        
    echo "Affichage avec guillemets:<br>"; 
    echo "ici on écrit notre phrase et on appelle la variable en la notant simplement entre les guillements.<br>";
        echo "L'âge de $prenom est de $age ans"."<br><br>";

    echo "Affichage avec des apostrophes:<br>";
    echo "ici on écrit notre phrase et on concatène la variable. Pour cela, on ouvre et on ferme l'apostrophe, puis on met un point,<br>";
    echo "on écrit notre variable et on remet un point après, on ouvre à nouveau l'apostrophe si on a encore une phrase à écrire.<br><br>";
        echo 'L\'âge de'.$prenom. 'est de'.$age. 'ans'."<br>";

    ?>
</body>

</html>