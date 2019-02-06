<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX POST SELECT</title>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="ajax4.js"></script>
</head>

<body>

<div class="jumbotron">
        <h1 class="display-4 text-center">AJAX POST SELECT</h1>
        <hr>



<?php 

require_once 'init.php';

$result = $bdd->query("SELECT * FROM employes");

?>

<form>
  <div id="employes">  
  <div class="form-group">

    <select class="form-control col-md-8 d-block m-auto" id="personne" name='personne'>

    <?php

while($employe = $result->fetch(PDO::FETCH_ASSOC)):?>

      <option value="<?= $employe['id_employes']?>"><?= $employe['nom'] ?></option>
<?php endwhile;?>
    </select>
  </div>
  </div>
  <input type="submit" id="submit" value="Afficher" class="col-md-8 btn btn-success d-block m-auto">
  <br>
</form>

<div id="tableau"></div>


    
</div>
          
</body>

</html>

