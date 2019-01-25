<?php


//connexion à la BDD
try {
	
	$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (Exception $e) {
	die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $e->getMessage());
}

//SESSION
/*permet de créer (ou lire) 1 fichier de session sur le serveur. Sans cette ligne, nous ne pourrons pas connecter d'internautes à leurs espaces membres plus tard.
Session_start() permettra en effet de maintenir (et ne pas perdre) l'internaute connecté au site web même s'il navigue de page en page.*/
session_start();

//CHEMIN
/*define("RACINE_SITE","/site/")
permettra de gérer notre site web en chemin absolu et non pas relatif. Et pour éviter tout problème, nous pourrons modifier cette constante une fois en ligne pour que cela ait une repercution immédiate partout où elle sera appelée..*/
define("RACINE_SITE", "/www/site/" );

//VARIABLE CONTENT
/* $content --> est une variable initialisée à vide pour éviter d'avoir des erreurs undefined si jamais nous tentons de l'afficher.
Nous nous servirons de cette variable pour retenir des messages que nous devrions adresser à l'internaute, cela nous permettra de faire 1 affichage global de tous nos éventuels messages à un endroit précis (et non pas au dessus du doctype par exemple).*/
$content ="";

//AUTRES FICHIERS D'INCLUSIONS
/*require_once("fonction.inc.php"); nous allons inclure notre fichier de fonction avec nous. Du coup, lorsque nous appellerons le fichier init.inc.php, cela aura aussi pour effet d'inclure le fichier fonction.inc.php, (2 en 1) !*/
require_once("fonction.inc.php");
