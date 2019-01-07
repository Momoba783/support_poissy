<?php

//création ou ouverture d'un fichier session si il existe déjà
session_start();

//pour résumer session_start() permet de créer un fichier de session (ou de l'ouvrir s'il existe déjà), mais aussi de créer un cookie (ou s'il existe déjà de le relier à un fichier de session déjà existant).
//il faut toujours utiliser session_start(), et le placer au plus haut de la page.

$_SESSION['pseudo'] = "Sora";
$_SESSION['mdp'] = "keyblade";

echo "<pre>"; print_r($_SESSION) ; echo "</pre>";
unset($_SESSION['mdp']);
echo "<pre>"; print_r($_SESSION) ; echo "</pre>";
session_destroy();
echo "<pre>"; print_r($_SESSION) ; echo "</pre>";

//pour vider un fichier de session on utilise unset().

