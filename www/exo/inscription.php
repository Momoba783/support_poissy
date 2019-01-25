<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8','root', '');

if($_POST){
    if($_POST['mdp'] == $_POST['mdp2']){
        $q = $bdd->query("INSERT INTO member (pseudo, mdp, email) VALUES ('$_POST[pseudo]', '$_POST[mdp]', '$_POST[email]')");
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header('location: accueil.php');
    }
 }

 ?>

<div class="container">
<form method="post" action="">
  <h5 class="card-title">Inscription</h5>
  <div class="form-row">
     <div class="form-group col-md-7">
      <label for="inputPseudo4">Pseudo</label>
      <input type="text" name="pseudo" class="form-control" id="inputPseudo4" placeholder="Pseudo">
    </div>
    <div class="form-group col-md-7">
      <label for="inputEmail4">E-mail</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="myemail@email.com">
    </div>
    <div class="form-group col-md-7">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="mdp" id="inputPassword4" placeholder="Entrez votre mot de passe">
    </div>
    <div class="form-group col-md-7">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="mdp2" id="inputPassword4" placeholder="Veuillez retaper votre mot de passe">
    </div>
    </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>
</html>