<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>COOKIE PHP</title>
</head>
<body>
    <h2 class="display-4 text-center">COOKIE PHP</h2>

    <a href="?choix=fr">France</a><br>
    <a href="?choix=it">Italie</a><br>
    <a href="?choix=pt">Portugal</a><br>
    <a href="?choix=es">Espagne</a><br>

    <?php
        if(isset($_GET['choix'])) // on tombe dans la condition lorsqu'on a cliqué sur un lien
        {
            $pays = $_GET['choix'];
        }

        elseif(isset($_COOKIE['choix'])) // on tombe dans lr elseif au cas ou un pays a été conservé dans le fichier 'cookie'
        {
            $pays = $_COOKIE['choix'];
        }

        else{ // on tombe dans le else seulement dans le cas de la première visite sur le site
            $pays = 'fr';
        }
        //echo time(); //time() est une fonction prédefinie qui retourne le nombre de secondes écoulées du 1er janvier 1970 a today
        $un_an = 365*24*3600;
        setcookie("pays", $pays, time()+$un_an); // 3 arguments : nom du cookie / valeur du cookie / durée de vie

        switch($pays)
        {
            case 'fr';
                echo "Vous êtes sur un site français !!<br>";
            break;
            case 'it';
                echo "Vous êtes sur un site italien !!<br>";
            break;
            case 'pt';
                echo "Vous êtes sur un site portugais !!<br>";
            break;
            case 'es';
                echo "Vous êtes sur un site espagnol !!<br>";
            break;
        }

    ?>
    
</body>
</html>