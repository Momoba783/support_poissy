<?php 

require_once("inc/init.inc.php");
require_once("inc/haut.inc.php");

if(internauteEstConnecte()) header("location:profil.php");
/*if(isset($_GET['action']) && $_GET['action'] == "deconnexion") Si l'internaute clic sur le lien deconnexion, nous arriverons sur la page connexion.php avec l'information suivante dans l'url ?action=deconnexion. C'est la raison pour laquelle nous utilisons la superglobale $_GET afin de detecter cette action et de déconnecter l'internaute via session_destroy();.*/
if(isset($_GET['action']) && $_GET['action'] == "deconnexion"){
	session_destroy();
}
/*if($_POST) Cette condition IF permet de detecter si l'internaute à cliqué sur le bouton submit pour se connecter.

$resultat = executeRequete("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]' AND mdp = '$_POST[password]' "); Nous allons utiliser notre fonction executeRequete pour allez consulter la base afin de savoir si le pseudo et le mdp avec lequel l'internaute tente de se connecter correspondent bien à 1 compte réel sur notre site web. Y'a t'il un enregistrement correspondant dans notre base ?

$membre = $resultat->fetch_assoc(); Revenons sur le cas du pseudo valide, nous devons absolument traiter (fetch_assoc) pour connaitre les informations récupérées en base. En effet, nous devons savoir si le membre a le bon pseudo mais aussi s'il possède le bon mot de passe associé.*/
if($_POST){

	$resultat = executeRequete("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]' AND mdp = '$_POST[password]' ");

	$membre = $resultat->fetch(PDO::FETCH_ASSOC);

	if($membre){

		foreach ($membre as $key => $value) {
			if($key != 'mdp')
			{
				$_SESSION['membre'][$key] = $value;
			}
		}

		header("location:profil.php");
	} else {
		$content .= '<div class="alert alert-danger" role="alert">Pseudo et/ou Mot de passe incorrect</div>';
	}
}

?>
<!-- 
	AFFICHAGE HTML
 --><div class="container">
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
					  <button type="submit" class="btn btn-primary">Connexion</button>
					</form>

					<?php echo $content ;?>
	  		</div>
		</div>	
	</div>	
</div>
<?php require_once('inc/bas.inc.php') ;?>