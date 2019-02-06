<?php
require_once('init.php');
$tab = array();

//--------- REQUETE 'ALLER' AJAX
$result = $bdd->exec("DELETE FROM employes WHERE id_employes = '$_POST[id]'");
// $result = $bdd->exec("DELETE FROM employes WHERE id_employes = 1008");
// On test la requete PHP, en fait si il y a des erreurs dans le fichier PHP, les requêtes AJAX ne passeront pas ! TOUJOURS CONTROLER LES FICHIERS PHP !!

//--------- REQUETE 'ALLER' AJAX
$result = $bdd->query("SELECT * FROM employes");
$tab['resultat'] = '<div class="form-group">';
$tab['resultat'] .= '<label for="personne">Liste des employés</label>';
$tab['resultat'] .= '<select class="form-control col-md-8 d-block m-auto" id="personne" name="personne">';
while($employe = $result->fetch(PDO::FETCH_ASSOC)){
    
    $tab['resultat'] .= "<option value='$employe[id_employes]'>$employe[nom]</option>";
}

$tab['resultat'] .= '</select>';
$tab['resultat'] .= '</div>';

echo json_encode($tab);


