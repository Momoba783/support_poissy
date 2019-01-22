<?php 

//afficher les informations du membre à traver les informations enregistré dans le fichier session, ATTENTION, si l'utilisateur n'est pas connecté redirigez le vers la page de connexion.
require_once('inc/init.inc.php');

/*Nous verifions if(!internauteEstConnecte()) si l'internaute (!) N'EST PAS connecté (le point d'exclamation demande si la fonction renvoie false, donc si l'internaute n'est pas connecté).
	Si l'internaute n'est pas connecté, il n'a rien à faire sur la page de profil, nous le renvoyons vers la page de connexion header("location:connexion.php");.*/
if(!internauteEstConnecte()) header('location:connexion.php');

require_once('inc/haut.inc.php');

//debug($_SESSION);
?>


<!-- 
	AFFICHAGE HTLM
 -->
<div class="card border-dark mb-3 profil-informations" style="max-width: 18rem;">
  <div class="card-header"><?= '<span class="pseudo">' . $_SESSION['membre']['pseudo'] . "</span>"; ?></div>
  <div class="card-body text-dark">
    <p class="card-text"><?= "Nom : " . $_SESSION['membre']['nom']; ?></p>
    <p class="card-text"><?= "Prenom : " . $_SESSION['membre']['prenom']; ?></p>
    <p class="card-text"><?= "Adresse E-mail : " . $_SESSION['membre']['email']; ?></p>
    <p class="card-text"><?= "Ville : " . $_SESSION['membre']['ville']; ?></p>
    <p class="card-text"><?= "Code postal : " . $_SESSION['membre']['code_postal']; ?></p>
    <p class="card-text"><?= "Adresse postal : " . $_SESSION['membre']['adresse']; ?></p>
  </div>
</div>

<?php require_once('inc/bas.inc.php');?>