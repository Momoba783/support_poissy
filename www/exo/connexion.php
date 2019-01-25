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

if($_POST){
    

$bdd = new PDO('mysql:host=localhost;dbname=exercice;charset=utf8','root', '');

$query = $bdd->query("SELECT * FROM member WHERE pseudo = '$_POST[pseudo]' and mdp = '$_POST[password]'");
// var_dump($query);

if($query->rowCount()){
    $_SESSION['pseudo']=$_POST['pseudo'];
    header("location:accueil.php");
}

}
?>

<div class="container">
 	<div class="row">
		<div class="card mt-5" style="width: 30rem;">
	  		<div class="card-body">
	   			<h5 class="card-title">Connexion</h5>
	   			<form method="post" action="">
					  <div class="form-group">
					    <label for="exampleInputPseudo1">Pseudo</label>
					    <input type="text" name="pseudo" class="form-control" id="exampleInputPseudo1" placeholder="Entrer votre pseudo">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
                      <a href="inscription.php">Inscription</a>
					  <button type="submit" class="btn btn-primary">Connexion</button>
					</form>

	  		</div>
		</div>	
	</div>	
</div>








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>
</html>
