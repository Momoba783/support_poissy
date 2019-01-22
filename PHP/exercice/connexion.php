<?php
if($_POST)
{

try {

$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}

$query = $bdd->prepare("SELECT pseudo, password FROM utilisateur WHERE pseudo = :pseudo AND password = :mdp");
$query->execute(
    array(
        ':pseudo' => $_POST['pseudo'],
        ':mdp' => $_POST['password']
    ));

    $reponse = $query->fetch();

    if($reponse){
        $alert = '<div class="alert alert-success" role ="danger">Bonjour' . $Reponse['pseudo'] . '<div>';
        echo $alert;
    } else {
        $alert = '<div class="alert alert-danger" role="danger">Pseudo / Mot de passe incorrect</div>';
        echo $alert;
        echo $content;
    } else {
        echo $content;
    }


?>



<form method="post" action="">
<label>Pseudo:</label><br>
<input type="text" name="pseudo"><br>

<label>Mot de passe :</label>
<input type="text" name="password"><br>

<input type="sbmit" value="Envoyer">
</form>