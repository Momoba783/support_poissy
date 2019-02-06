<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX INSERT JQUERY POST</title>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="ajax5.js"></script>
</head>

<body>

    <div class="jumbotron">
        <h1 class="display-4 text-center">AJAX INSERT ALL JQUERY POST</h1>
        <hr>


    <form id ="formulaire" method="post" action="" class="col-md-6 offset-md-3 text-center">
    <label for="exampleInputEmail1">Employé à insérer</label><br>
    <div class="col-md-12 d-flex justify-content-between">
    <input type="text" class="form-control col-md-5" id="prenom" name="prenom" placeholder="Prenom">
    <input type="text" class="form-control col-md-5" id="nom" name="nom" placeholder="Nom">
    </div>
    <br>
    <div class="col-md-12 d-flex justify-content-between">
    <input type="text" class="form-control col-md-5" id="sexe" name="sexe" placeholder="Sexe">
    <input type="text" class="form-control col-md-5" id="service" name="service" placeholder="Service">
    </div>
    <br>
    <div class="col-md-12 d-flex justify-content-between">
    <input type="date" class="form-control col-md-5" id="date" name="date" placeholder="Date d'embauche">
    <input type="number" class="form-control col-md-5" id="salaire" name="salaire" placeholder="Salaire">
    </div>
    <br>
  <button type="submit" id="action" class="btn btn-info col-md-12" >Insérer</button>
</form>
<br>


<div id="resultat"></div>
</div>
    








    

        
</body>

</html>