<?php

//mysql -> obsolete
//mysqli -> fonction amélioré de mysql_
//pdo -> fonction qui permet de se connecter a n'importe quelle BDD

// pour se connecter à une base de données on a besoin de plusieurs informations :

/*

-Nom de l'hôte : c'est l'adresse de l'ordinateur où mysql est installé. (ici localhost)
- la base : le nom de la BDD a laquelle on va se connecter
- le login : le login de notre hebergeur (root)
- le mot de passe : le mdp pour accéder à notre hebergeur

*/
try {

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');

}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}

//on recupere tout le contenu de la table utilisateurs
$query = $bdd->query("SELECT * FROM utilisateur");

while ($donnees = $query->fetch()){
    echo $donnees['user_id'] . $donnees['pseudo'] . $donnees['password'] . "<br>";
}

//terminer le traitement de la requete
$query->closeCursor();


?>




