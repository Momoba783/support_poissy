<?php
require_once('init.php');
$tab = array();


$result = $bdd->query("SELECT * FROM employes WHERE id_employes = '$_POST[id]'");

//--------- REQUETE 'ALLER' AJAX


$tab['resultat'] = '<table class="table col-md-8 d-block m-auto border"><thead class="bg-success"> <tr>';

for($i = 0; $i < $result->columnCount(); $i++){ //compter les colonnes
    $colonne = $result->getColumnMeta($i); //pour récupérer les noms des colonnes
    $tab['resultat'] .= '<th scope="col">' . $colonne["name"] . '</th>';//name= fonction prédéfinie qui va afficher les noms
}

$tab['resultat'].= '</tr> </thead> <tbody>';
while($row = $result->fetch(PDO::FETCH_ASSOC)){ //PDO::FETCH_ASSOC fonction prédéfinie qui permet de recupérer les infos l'interieur de ma base de données en les filtrant et me donnant uniquement celles dont j'ai besoin.
    
    $tab['resultat'] .= "<tr>";
    foreach($row as $value){
        $tab['resultat'].="<td>" . $value . "</td>";
    }
    $tab['resultat'] .= "</tr>";
}

$tab['resultat'] .= '</tbody>';
$tab['resultat'] .= '</table>';

echo json_encode($tab);


