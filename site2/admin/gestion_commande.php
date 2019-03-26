<?php 
require_once ("../inc/init.inc.php");
require_once ("../inc/haut.inc.php");

$resultat = executeRequete("SELECT * FROM commande c, details_commande d, membre m, produit p 
WHERE c.id_commande = d.id_commande
AND m.id_membre = c.id_membre
AND p.id_produit = d.id_produit");

$commande = $resultat->fetch(PDO::FETCH_ASSOC);

$content .= '<h2>Affichage de la liste des commandes</h2>';
$content .='<table class="table table-striped table-dark"><thead><tr>';

$content .= '<th scope="col"> Id Commande</th>';
$content .= '<th scope="col"> Id Membre</th>';
$content .= '<th scope="col"> Id Produit</th>';
$content .= '<th scope="col"> Quantité</th>';
$content .= '<th scope="col"> Montant</th>';
$content .= '<th scope="col"> Date d\'enregistrement</th>';
$content .= '<th scope="col"> Etat de la commande</th>';
$content .= '</thead></tr><tbody>';

$option = ["En cours de traitement", "Envoyé", "Livré" ];

// Affichage des commandes
while($commande = $resultat->fetch(PDO::FETCH_ASSOC)){
    $content .= "<tr>
    <th scope='row'>" . $commande['id_commande'] . "</th>
      <td>" . $commande['id_membre'] . "</td>
      <td>" . $commande['id_produit'] . "</td>
      <td>" . $commande['quantite'] . "</td>
      <td>" . $commande['montant'] . "€</td>
      <td>" . $commande['date_enregistrement'] . "</td>
      <td>
      <form method='post'>
      <select>
      <option name='opt1'>" . $option[0] . "</option>
      <option name='opt2'>" . $option[1] . "</option>
      <option name='opt3'>" . $option[2] . "</option>
      </select>
      <a href='?action=modifier&id_commande=" . $commande['id_commande'] . "'>Modifier statut</a>
      </form>
      </td>
    </tr>";
}
$content .= "</tbody></table>";

//Modification de l'état de la commande : "En cours de traitement", "Envoyé", "Livré".
if(isset($_GET['action']) && $_GET['action'] == "modifier"){

  if($option[0] && $_POST['name'] == "opt1"){
    executeRequete("UPDATE commande SET etat = '$option[0]' WHERE id_commande = '$_GET[id_commande]'");
  }
  else if($option[1] && $_POST['name'] == "opt2"){
    executeRequete("UPDATE commande SET etat = '$option[1]' WHERE id_commande = '$_GET[id_commande]'");
  }
  else if($option[2] && $_POST['name'] == "opt3"){
    executeRequete("UPDATE commande SET etat = '$option[2]' WHERE id_commande = '$_GET[id_commande]'");
  }

}

echo $content;

require_once ('../inc/bas.inc.php');

?>