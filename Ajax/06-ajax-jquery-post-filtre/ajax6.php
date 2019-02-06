<?php

require_once ("init.php");
extract($_POST);
$q="SELECT * FROM employes WHERE service = '$service' AND sexe = '$sexe' AND salaire BETWEEN '$salaireUn' AND '$salaireDeux' AND date_embauche BETWEEN '$dateUn' AND '$dateDeux'";
$resultat = $bdd->query($q);

$tab['resultat'] = '<br><br><table class="table table-striped table-success">
<thead>
<tr>';

for($i = 0; $i < $resultat->columnCount(); $i++){
    $colonne = $resultat->getColumnMeta($i);
    $tab['resultat'] .= '<th scope="col">' . ucfirst($colonne["name"]) . '</th>';
}

$tab['resultat'] .= '</tr></thead><tbody>';

while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    $tab['resultat'] .= '<tr>';
    foreach($ligne as $key => $value){
        $tab['resultat'] .= '<td>' . $value . '</td>';
    }
    $tab['resultat'] .= '</tr>';
}

$tab['resultat'] .= '</tbody></table>';

echo json_encode($tab);

?>