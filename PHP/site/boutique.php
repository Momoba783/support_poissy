<?php
require_once('inc/init.inc.php');


//AFFICHAGE CATEGORIES
$cat_produit = executeRequete("SELECT DISTINCT categorie FROM produit");

$content .= '<div class="categories" mt-5>';
$content .= '<ul>';

while($cat = $cat_produit->fetch(PDO::FETCH_ASSOC)){
	$content .= '<li><a href="?categorie='. $cat['categorie'] . '">' . $cat['categorie'] . '</a></li>';
}

$content .= "</ul>";
$content .= "</div>";

//AFFICHAGE DES PRODUITS
$content .= '<div class=" container mt-5 produits">';
if(isset($_GET['categorie'])){
	$donnees = executeRequete("SELECT id_produit, reference,titre,photo,prix FROM produit WHERE categorie = '$_GET[categorie]'");

	while($produit = $donnees->fetch(PDO::FETCH_ASSOC)){

		$content .= '<div class="card-body product">';
		$content .= '<h2 class="card-title">' . $produit['titre'] . "</h2>";
		$content .= '<a href="fiche_produit.php?id_produit=' . $produit['id_produit'] . '"><img src="'. $produit['photo'] .'" width="130" height="100"></a>';
		$content .= "<p>" . $produit['prix'] . "€</p>";
		$content .= "<p>Réf : " . $produit['reference'] . "</p>";
		$content .= '<a href="fiche_produit.php?id_produit=' . $produit['id_produit'] .'" class="btn btn-primary">Voir la fiche</a>';
		$content .= "</div>";
	}


} 

$content .= "</div>";


//AFFICHAGE HTML
require_once('inc/haut.inc.php');

echo '<div class="main-boutique">';
echo $content;
echo "<div>" . '<img src="photo/accueil.PNG">'."</div>";
echo "</div>";
require_once('inc/bas.inc.php');
?>
