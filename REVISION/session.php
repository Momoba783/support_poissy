<?php
session_start();//permet de créer un fichier 'session'

$_SESSION['pseudo'] = 'MomoBa';
$_SESSION['nom'] = 'BA';
$_SESSION['prenom'] = 'Mohamed';

echo'<pre>';print_r($_SESSION); echo'</pre>';

unset($_SESSION['prenom']);//permet de vider une partie de la session
echo'<pre>';print_r($_SESSION); echo'</pre>';

session_destroy();//permet de supprimer la session


/*

Les SESSION permettent de garder des variables actives quelque soit la page où l'on se trouve, il suffit d'executer 'session_start()' pour avoir accès à ces données

*/