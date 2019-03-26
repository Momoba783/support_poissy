<?php
require_once('../inc/init.inc.php');
require_once('../inc/haut.inc.php');

if(!internauteEstConnecteEtEstAdmin()) header("location:../connexion.php");

$resultat = executeRequete("SELECT * FROM membre where statut <> 1");
$resultat2 = executeRequete("SELECT * FROM membre where statut <> 1");
$membre = $resultat->fetch(PDO::FETCH_ASSOC);

$content .= '<h2>Affichage des utilisateurs</h2>';
$content .="Nombre d'utilisateur(s) inscrit(s) " . $resultat->rowCount();
$content .='<table class="table table-striped"><thead><tr>';

//Affichage de l'en-tête du tableau avec récupération des nom de colonnes dans la bdd sans le mdp
for($i = 0; $i < $resultat->columnCount(); $i++){	
	$colonne = $resultat->getColumnMeta($i);
	if($colonne["name"] !== "mdp"){
		$content .= '<th scope="col">' . $colonne["name"] . '</th>';
	}	
}

$content .= '<th scope="col" method="get" action="modifier">Modifier statut</th>';
$content .= '<th scope="col" method="get" action="supprimer">Supprimer </th>';
$content .= '<tbody>';


// Affichage des utilisateurs sans le mdp
while($ligne = $resultat2->fetch(PDO::FETCH_ASSOC)){
	$content .= "<tr>";
	foreach($ligne as $key => $value){
		if($key !== "mdp"){
			$content .= '<td>' . $value . '</td>';
		}
	}
	$content .= '<td><a href="?action=modifier&id_membre=' . $ligne['id_membre'] . '&statut=' . $ligne['statut'] . '">Modifier</a></td>';

	$content .= '<td><a href="?action=supprimer&id_membre=' . $ligne['id_membre'] . '" onclick="return(confirm("Etes vous sûr de vouloir supprimer cet utilisateur?")">Suppression</a></td>';

	$content .= '</tr>';
}
$content .= "</tbody></table>";

// pour modifier un utilisateur
if(isset($_GET['action']) && $_GET['action'] == "modifier"){
	$resultat = executeRequete("SELECT statut FROM membre WHERE id_membre = '$_GET[id_membre]'");
	executeRequete("UPDATE membre SET statut = 1 WHERE id_membre = '$_GET[id_membre]'");
	header("location: gestion_membre.php");
}

//pour supprimer un utilisateur
if(isset($_GET['action']) && $_GET['action'] == "supprimer"){
	$resultat = executeRequete("SELECT * FROM membre WHERE id_membre = $_GET[id_membre]");
	executeRequete("DELETE FROM membre WHERE id_membre = $_GET[id_membre]");
	header("location: gestion_membre.php");
}


echo $content;

require_once('../inc/bas.inc.php');
?>
