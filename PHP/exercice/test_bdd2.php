<?php
if($_POST){
    
//Etape 1 : connexion à la bdd
try {

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root', '');
    
    }catch (Exception $e){
        die('erreur : ' . $e->getMessage());
    }

//Etape 2 : créer la requête
$query = $bdd->query("SELECT * FROM membres");

while ($donnees = $query->fetch()){
    echo $donnees['user_id'] . " " . $donnees['pseudo'] . " " . $donnees['mdp'] . "<br>";
}

//Etape 3 : clôturer la requête 
$query->closeCursor();

}
?>

<form method="post" action="">
  <label>Pseudo : </label><br>
  <input type="text" name="pseudo"><br>

  <label>mdp: </label><br>
  <input type="text" name="password"><br>

  <input type="submit" value="Envoyer">
</form>
