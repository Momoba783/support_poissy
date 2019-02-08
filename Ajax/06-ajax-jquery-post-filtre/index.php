<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX FILTRE JQUERY</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="ajax6.js"></script>
</head>
<body>

    <div class="jumbotron">

        <h1 class="display-4 text-center">AJAX FILTRE JQUERY</h1><hr>

        <!--
            EXO: Réaliser un filtre sur la table "employes"
            Filtre réaliser avec 4 valeurs
            --sexe
            --service
            --date_embauche
            --salaire
        -->

        <form method="post" action="" class="col-md-6 offset-md-3 text-center">

            <!-- SERVICE -->

            <?php

            require_once ("init.php");

            $result = $bdd->query("SELECT DISTINCT service FROM employes");

            ?>

            <div class="form-group col-md-12">
                <select class="form-control d-block m-auto" id="service">
                    <?php
                        while($service = $result->fetch(PDO::FETCH_ASSOC)){
                            echo ("<option>" . $service['service'] . "</option>");
                        }
                    ?>
                </select>
            </div>
            
            <div class="container">
            
            <!-- SALAIRE -->

                <div class="form-row">
                    <div class="col">
                        <select class="form-control col-md-12 d-block m-auto" id="salaire1">
                        <?php
                            $result = $bdd->query("SELECT salaire FROM employes");

                            while($salaire = $result->fetch(PDO::FETCH_ASSOC)){
                                echo ("<option value='$salaire[salaire]'>" . $salaire['salaire'] . "€</option>");
                            }
                    ?>
                        </select>
                        <br>
                    </div>

                    <div class="col">
                        <select class="form-control col-md-12 d-block m-auto" id="salaire2">
                        <?php
                            $result = $bdd->query("SELECT salaire FROM employes");

                            while($salaire = $result->fetch(PDO::FETCH_ASSOC)){
                                echo ("<option value='$salaire[salaire]'>" . $salaire['salaire'] . "€</option>");
                            }
                        ?>
                        </select>
                    </div>
                </div>

                <!-- DATE D'EMBAUCHE -->

                <div class="form-row">
                    <div class="col-md-6">
                        <select class="form-control d-block m-auto" type="date" id="date1">
                        <?php
                            $result = $bdd->query("SELECT date_embauche FROM employes");

                            while($date = $result->fetch(PDO::FETCH_ASSOC)){
                                echo ("<option>" . $date['date_embauche'] . "</option>");
                            }
                        ?>
                        </select>
                    </div>
                    <div class=" col-md-6">
                        <select class="form-control d-block m-auto" type="date" id="date2">
                        <?php
                            $result = $bdd->query("SELECT date_embauche FROM employes");

                            while($date = $result->fetch(PDO::FETCH_ASSOC)){
                                echo ("<option>" . $date['date_embauche'] . "</option>");
                            }
                        ?>
                        </select>
                    </div>
                </div>

                <br>

                <div class="form-row">
                    <div class="form-check form-check-inline d-block m-auto">
                        <input class="form-check-input" type="radio" name="choix" id="choix1" value="f">
                        <label class="form-check-label" for="inlineRadio1">Femme</label>
                    </div>
                    <div class="form-check form-check-inline d-block m-auto">
                        <input class="form-check-input" type="radio" name="choix" id="choix2" value="m">
                        <label class="form-check-label" for="inlineRadio2">Homme</label>
                    </div>
                </div>

            </div>
            <br>
            <button type="submit" id="filtrer" class="col-md-12 btn btn-dark d-block m-auto">Filtrer</button>

            <div id="resultat"></div>

        </form>

    </div>

    
    
</body>
</html>