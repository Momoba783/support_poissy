<?php
$formule = '';
$photo = '';
$prix = 0;

if (!empty($_GET)) {
    $formule = $_GET['menu'];
    $photo = $_GET['img'];
    $prix = $_GET['prix'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet"> 
    <link rel="stylesheet" href="">
    <style>
        html{position: relative; min-height: 100%;}
        body{background: #a9f0d1;}
        h1, h2, h3, h4, h5{ font-family: 'Srisakdi', cursive; }
        h1{padding: 60px; font-weight: bold;}
        h3{ font-weight: bold; text-align: center; }
        h4{ text-align: right; }
        .container{ background: url(bg.jpg) repeat; padding-bottom: 5px; margin-top: 5vh;}
        .card-img-top{ max-height: 25vh;}
        .card{ margin-bottom: 6vh;}
        img[src="pg.jpg"]{ max-width: 100%; margin-bottom: 15vh;}
        footer{ margin-top: 5vh;}
        .blockquote-footer { text-align: right; }
        .fa-kiwi-bird { color: #6c9986;}
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-kiwi-bird"></i> Au Pois Gourmand</h1>

        <!-- 
            Si l'internaute n'a pas cliqué un choix, la page contient le bloc suivant
         -->

<?php 
    if (empty($_GET)) {
        ?>
        <div class="row">
            <div class="col-4 offset-1">
                <div class="card">
                        <img class="card-img-top img-fluid" src="rome.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Formule Rome</h3>
                            <p class="card-text">Tomates buratina</p>
                            <p class="card-text">Rizotto aux asperges</p>
                            <p class="card-text">Panna cotta</p>
                            <a href="?menu=Rome&prix=25&img=rome.jpg" class="btn btn-block btn-info">Choisir</a>
                        </div>
                </div>
            </div>
            <div class="col-4 offset-2">
                <div class="card">
                        <img class="card-img-top img-fluid" src="nyork.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Formule New-York</h3>
                            <p class="card-text">César salade</p>
                            <p class="card-text">Cheese burger</p>
                            <p class="card-text">Cheesecake</p>
                            <a href="?menu=New-York&prix=23&img=nyork.jpg" class="btn btn-block btn-danger">Choisir</a>
                        </div>
                </div>
            </div>
            
        </div><!-- ./ div.row-->
        <div class="row">
            <div class="col-4 offset-1">
                <div class="card">
                        <img class="card-img-top img-fluid" src="delhi.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Formule Delhi</h3>
                            <p class="card-text">Poppadoms</p>
                            <p class="card-text">Agneau byriani</p>
                            <p class="card-text">Lassi mangue</p>
                            <a href="?menu=Delhi&prix=24&img=delhi.jpg" class="btn btn-block btn-warning">Choisir</a>
                    </div>
                </div>
            </div>
            <div class="col-4 offset-2">
                <div class="card">
                    <img class="card-img-top img-fluid" src="hanoi.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Formule Hanoï</h3>
                        <p class="card-text">Nems aux crevettes</p>
                        <p class="card-text">Poulet saté</p>
                        <p class="card-text">Perles de coco</p>
                        <a href="?menu=Hanoï&prix=28&img=hanoi.jpg" class="btn btn-block btn-primary">Choisir</a>
                    </div>
                </div>
            </div>
        </div><!-- ./ div.row-->

        <!-- 
            Si l'internaute a cliqué un choix, l'affichage change, et la page contient le bloc suivant à la place
         -->
<?php
    } else {
        ?>
          
        <div class="card">
            <h2 class="card-header alert alert-success">Merci pour votre commande !</h2>
            <div class="card-body">
                <div class="row">
                    <div class="col-4 photo">
                        <img src="<?php echo $photo; ?>" alt="menu gourmand">
                    </div>
                    <div class="col-8">
                        <h5 class="card-title">Votre formule 
                            <?php echo $formule; ?>
                        arrive dans quelques instants... <i class="fas fa-kiwi-bird"></i></h5>
                        <p class="card-text">Nous vous souhaitons une bonne dégustation.</p>
                        <p class="card-text">Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.</p>
                        <footer class="blockquote-footer">Votre facture sera de 
                        <?php echo $prix; ?>
                        €</footer>
                        <a href="workshop_1.php" class="btn btn-block btn-success">Choisir un autre menu</a>
                    </div>
                </div>   
            </div>
        </div>

        <!-- Bloc avec image centrée et légende avec étoiles -->
        <div class="row">
            <div class="col-4 offset-4">
                <footer class="blockquote-footer">Vous avez aimé ? <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></footer>
                <img src="pg.jpg" alt="pois gourmand">
            </div>
        </div>

<?php
    }
?>

        <h4><i class="fas fa-kiwi-bird"></i> ..... <i class="fas fa-kiwi-bird"></i> .... <i class="fas fa-kiwi-bird"></i> ... <i class="fas fa-kiwi-bird"></i> .. <i class="fas fa-kiwi-bird"></i> . Au Pois Gourmand</h4>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"> </script>
</body>
</html>