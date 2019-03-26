<nav class="navbar navbar-expand-lg navbar-light bg-light ">
	<a class="navbar-brand" href="#">
    	<?php echo '<img src=" ' . RACINE_SITE . 'inc/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo maison">
    	Mon site' ?>
  	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		<ul class="nav  ">
		<?php if(internauteEstConnecteEtEstAdmin()){
			echo '
			<li class="nav-item">
				<a class="nav-link text-info" href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info" href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>
			</li>
			<li class="nav-item active"> 
				<a class="nav-link text-info" href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion membre</a> 
			</li>		
			<li class="nav-item">
				<a class="nav-link text-info" href="' . RACINE_SITE . 'boutique.php">Acces à la boutique</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info " href="' . RACINE_SITE . 'panier.php">Votre panier</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info "  href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Déconnexion</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info "  href="' . RACINE_SITE . 'profil.php?action=deconnexion">Voir mon profil</a>
			</li>';
		}
		else if(internauteEstConnecte()){
			echo '
			<li class="nav-item">
				<a class="nav-link text-info" href="' . RACINE_SITE . 'boutique.php">Acces à la boutique</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info " href="' . RACINE_SITE . 'panier.php">Votre panier</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info "  href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Déconnexion</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info "  href="' . RACINE_SITE . 'profil.php?action=deconnexion">Voir mon profil</a>
			</li>';
		}
		else{
			echo '
			<li class="nav-item">
				<a class="nav-link text-info" href="' . RACINE_SITE . 'inscription.php">Inscription</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info" href="' . RACINE_SITE . 'connexion.php">Connexion</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info" href="' . RACINE_SITE . 'boutique.php">Acces à la boutique</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-info " href="' . RACINE_SITE . 'panier.php">Votre panier</a>
			</li>';
		}
		?>		
		</ul>
  	</div>
</nav>

