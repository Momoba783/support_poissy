<?php

function executeRequete($req){
	global $bdd;

	$resultat = $bdd->query($req);
	if(!$resultat){
		die('Erreur sur la requete sql.<br>Message : ' . $bdd->error() . '<br>Code : ' . $req);
	}

	return $resultat;
}


/*La fonction executeRequete

function executeRequete($req) La fonction sera destinée à recevoir 1 argument entrant (la requête SQL arrivera dans la variable de reception $req prévue à cet effet).

global $bdd; permet d'avoir accès à la variable $bdd définie dans le fichier init.inc.php (espace global) à l'intérieur de notre fonction (espace local).

$resultat = $bdd->query($req); on exécute la requête reçue en argument et on gardera les résultats dans la variable $resultat.

if(!$resultat) si la variable $resultat renvoie false, c'est qu'il y a une erreur de requête SQL.

die("Erreur sur la requete sql.<br>Message : " . $bdd->error . "<br>Code: " . $req); Dans le cas où la requête échoue, on lui demande d'adresser 1 message et d'arreter l'exécution du code avec l'utilisation de die.

.*/

function debug($d, $mode = 1){
	echo '<div class="alert alert-warning" role="alert">';
	$trace = debug_backtrace();
	echo "debug demandé dans le fichier " . $trace[0]['file'] . ' à la ligne ' . $trace[0]['line'];
	if($mode === 1){
		echo "<pre>" ; print_r($d) ; echo "</pre>";
	}else{
		var_dump($d);
	}
	echo "</div>";
}

/*La fonction debug

function debug($d, $mode = 1) La fonction sera destinée à recevoir 1 ou 2 argument(s) entrant(s). En premier ce sera la variable/array/object à explorer et en second ce sera 1 mode d'affichage.*/



/*La fonction internauteEstConnecte() va nous permettre de savoir si l'internaute est connecté par une simple condition :

   if(!isset($_SESSION['membre'])) return false; si la session membre n'existe pas, c'est que l'internaute n'est pas passé par la page de connexion (ou alors qu'il a été déconnecté depuis). on retournera la valeur "FALSE" pour dire "Faux l'internaute n'est pas connecté".

      	else sinon, c'est que la session membre existe et donc que l'internaute est connecté (avec 1 fichier de session + cookie). on retournera la valeur "TRUE" pour dire "Vrai l'internaute est connecté".*/
function internauteEstConnecte(){
	if(!isset($_SESSION['membre'])) return false;
	else return true;
}


/*La fonction internauteEstConnecteEtEstAdmin() va nous permettre de savoir si l'internaute est connecté en tant qu'administrateur (statut a 1) ou en tant que membre (statut a 0) :

   if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1 si la fonction internauteEstConnecte() renvoie "TRUE", l'internaute est connecté (avec 1 fichier de session + cookie), on vérifie donc si son statut est a 1. Si oui, nous renverrons TRUE pour dire "Vrai, cet internaute est connecté et est admin".

   		else sinon, c'est soit que l'internaute n'est pas connecté ou soit que l'internaute est connecté mais sans avoir les droits d'administration, nous renverrons donc "FALSE" pour dire "Faux cet internaute n'est pas administrateur".*/

function internauteEstConnecteEtEstAdmin(){
	if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1) return true;
	else return false;
}

function creationPanier(){

	if(!isset($_SESSION['panier'])){
		$_SESSION['panier'] = array();//titre, id, quantite, prix
		$_SESSION['panier']['titre'] = array();//titre de mes produits
		$_SESSION['panier']['id_produit'] = array();//id de mes produits
		$_SESSION['panier']['quantite'] = array();//quantite
		$_SESSION['panier']['prix'] = array();//prix
	}
	
}

function ajouterProduitDansPanier($titre,$id_produit,$quantite,$prix){
	
	creationPanier();
	$position_produit = array_search($id_produit, $_SESSION['panier']['id_produit']);
	if($position_produit !== false){
		$_SESSION['panier']['quantite'][$position_produit] += $quantite;
	}else {
		$_SESSION['panier']['titre'][]= $titre;
		$_SESSION['panier']['id_produit'][]= $id_produit;
		$_SESSION['panier']['quantite'][]= $quantite;
		$_SESSION['panier']['prix'][]= $prix;
	}
	
}

function montantTotal(){
	$total = 0;

	for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++){
		$total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
	}

	return round($total,2);
}

function retirerProduitPanier($id_produit_a_supprimer){

	$position_produit = array_search($id_produit, $_SESSION['panier']['id_produit']);
	if($position_produit !== false){
		array_splice($_SESSION['panier']['titre'], $position_produit, 1);
		array_splice($_SESSION['panier']['id_produit'], $position_produit, 1);
		array_splice($_SESSION['panier']['quantite'], $position_produit, 1);
		array_splice($_SESSION['panier']['prix'], $position_produit, 1);
	}
	
}