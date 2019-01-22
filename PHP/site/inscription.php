<?php require_once('inc/init.inc.php');
      require_once('inc/haut.inc.php');
 
/*if($_POST) Cette condition IF permet de detecter si l'internaute à cliquer sur le bouton submit pour s'inscrire.

debug($_POST); Si l'internaute sollicite une inscription, nous allons utiliser notre fonction debug afin de voir les saisies qu'il a postées (le temps de faire des tests). Cette fonction a été inclut par le fichier init.inc.php puisqu'il inclue lui même fonction.inc.php

$verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']); Nous vérifions qu'il n'y ai pas de mauvais caractère dans le pseudo. (return 0 si mauvais caractère dans le pseudo, 1 sinon). vous pouvez écrire echo $verif_caractere;
preg_match() est une expression régulière (regex) toujours entourée du symbole # dieze afin de préciser des options choisies :
^ désigne le début de la chaine.
$ désigne la fin de la chaine.
+ est présent pour dire que les lettres autorisées peuvent apparaitre plusieurs fois.

if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ) A travers cette condition, nous vérifions qu'il n'y ai pas un caractère interdit ou un problème de taille sur le pseudo. Cela reste faible, dans une version plus aboutie il faudrait penser à renforcer les contrôles (sur le pseudo mais aussi les autres champs).

$content .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>"; En cas d'erreur, nous allons en informer l'internaute mais pas tout de suite ! sinon nous serions au dessus du doctype niveau code-source, nous allons donc retenir l'affichage du message dans la variable $content que nous remplissons afin de l'afficher plus tard.

else Sinon, la variable $content est vide c'est qu'il n'y a pas eu d'erreur précédemment.

$membre = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'"); Nous allons utiliser notre fonction executeRequete pour allez voir si le pseudo que l'internaute tente de prendre n'est pas déjà attribué à un autre membre.

if($membre->num_rows > 0) Si la requête renvoie plus de 0 résultat (donc au moins 1), c'est que le pseudo est déjà attribué à quelqu'un d'autre.

$content .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>"; Nous invitons le membre à choisir un autre pseudo si celui qu'il convoite est déjà attribué.

else Sinon, on lance l'inscription.

foreach($_POST as $key => $value){ $_POST[$key] = htmlEntities(addSlashes($value));} nous bouclons sur toutes les saisies afin de les passer dans les fonctions prédéfinies PHP htmlEntities et addSlashes. /!\ Cela permet d'effectuer 1 premier traitement mais ce n'est pas pour autant complétement sécurisé.
*/

 if($_POST){
    debug($_POST);
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']);
    if(!$verif_caractere || (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20 )){
      $content .= '<div class="alert alert-danger" role="alert">
  le pseudo doit contenir entre 1 et 20 caractères. <br> Caractères accepté : Lettre a-zA-Z chiffre 0-9.
</div>';
    } else {
      $membre = executeRequete("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]'");
      if($membre->rowCount() > 0){
        $content .= '<div class="alert alert-danger" role="alert">Pseudo indisponible. Veuillez en choisir un autre.</div>';
      } else {
        foreach ($_POST as $key => $value) {
          if($key === 'password'){
              $mdp_crypte = password_hash($value, PASSWORD_DEFAULT);
          }
          $_POST[$key] = htmlspecialchars(addslashes($value));
        }

        $bdd->query("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville,code_postal,adresse,accepter) VALUES ('$_POST[pseudo]','$mdp_crypte','$_POST[nom]','$_POST[prenom]','$_POST[email]','$_POST[civilite]','$_POST[ville]','$_POST[cp]','$_POST[adresse]','$_POST[accepter]')");

        $content .= '<div class="alert alert-success" role="alert">Félicitation vous êtes inscrit ! <a href="connexion.php">Cliquez ici</a> pour vous connecter</div>';
      }
    }
 }

 ?>

<?php echo $content ?>
<!-- Il est très important que les attributs name du formulaire soient prévus afin de pouvoir récupérer et exploiter les saisies en PHP. De préférence, nous pouvons garder les mêmes name que le nom de nos champs dans notre base de données. -->
<!-- 
  AFFICHAGE HTML 
-->

<form method="post" action="">
  <h5 class="card-title">Inscription</h5>
  <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputPseudo4">Pseudo</label>
      <input type="text" name="pseudo" class="form-control" id="inputPseudo4" placeholder="Pseudonyme">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNom4">Nom</label>
      <input type="text" name="nom" class="form-control" id="inputNom4" placeholder="Nom">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPrenom4">Prenom</label>
      <input type="text" class="form-control" name="prenom" id="inputPassword4" placeholder="Prenom">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">E-mail</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="myemail@email.com">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse</label>
    <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="1234 rue de...">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" name="ville" id="inputCity" pattern="[a-zA-Z0-9-_.]{5,15}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Code Postal</label>
      <input type="text" name="cp" pattern="[0-9]{5}" title="5 chiffre requis : 0-9" class="form-control" id="inputZip">
    </div> 
  </div>
    <label>Civilite</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="civilite" id="exampleRadios1" value="m" checked>
      <label class="form-check-label" for="exampleRadios1">
        Homme
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="civilite" id="exampleRadios2" value="f">
      <label class="form-check-label" for="exampleRadios2">
        Femme
      </label>
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="accepter" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        J'accepte
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
<?php require_once('inc/bas.inc.php'); ?>