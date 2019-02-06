<?php
require_once('init.php');
$tab=array();

//------- REQUETE 'ALLER' AJAX
if(!empty($_POST)){

    $result = $bdd->exec("INSERT INTO employes (prenom,nom,sexe,service,date_embauche,salaire) VALUES ('$_POST[prenom]','$_POST[nom]','$_POST[sexe]','$_POST[service]','$_POST[date_embauche]','$_POST[salaire]')");


    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-success">L\'employé ' .$_POST['prenom'] . " " . $_POST['nom'] . ' a été enregistré avec succès !</div>';
}
else{
    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-danger">Merci de renseigner le champ !!</div>';
}

$result = $bdd->query("SELECT * FROM employes");


$tab['resultat'] = '<table class="table col-md-6 offset-md-3 m-auto border"><thead class="bg-info"> <tr>';

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