
<?php
require_once ("inc/init.inc.php");
require_once ("inc/haut.inc.php");

if(internauteEstConnecte() || internauteEstConnecteEtEstAdmin()){    

    if(isset($_GET['action']) && $_GET['action'] == "modifier"){
        $resultat = executeRequete("SELECT * FROM membre WHERE pseudo ='$_GET[pseudo]'");
        $membre_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
    }
?>                      
    <div class="row d-flex justify-content-around">
        <form method="post" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" id="pseudo" value="<?php if(isset($membre_actuel['pseudo'])){ echo $_SESSION['membre']['pseudo'];}?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" name="mdp" class="form-control" id="password" placeholder="Nouveau mot de passe">
                </div>
            </div>
            <div class="form-row">                          
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php if(isset($membre_actuel['email'])){ echo $_SESSION['membre']['email'];}?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control" id="inputAdresse" value="<?php if(isset($membre_actuel['adresse'])){ echo $_SESSION['membre']['adresse'];}?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" id="ville" value="<?php if(isset($membre_actuel['ville'])){ echo $_SESSION['membre']['ville'];}?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="cp">Code Postal</label>
                    <input type="text" name="cp" class="form-control" id="cp" maxlength="5" value="<?php if(isset($membre_actuel['cp'])){ echo $_SESSION['membre']['cp'];}?>">
                </div>
            </div> 
            <div class="form-row">
	  	        <div class="form-group col-md-12 text-center">
      		        <label for="civilite"><strong>Civilité : </strong></label>
                    <br>
      		        <input type="radio" name="civilite" id="civilite" value ="m" checked> Homme
	  		        <input type="radio" name="civilite" id="civilite" value ="f"> Femme
   		        </div>
	        </div>
            <br>
            <div class="form-group col-md-12 text-center">
                <div class="form-group"> 
                    <label for="photo"><strong>Photo de profil</strong></label> <br>
                    <input type="file" id="photo" name="photo">
                </div> 
            </div> 
            <br>                            
            <div class="form-row d-flex justify-content-around">
                <input type="submit" value="Modifier mes informations"></a>
            </div>                          
        </form>
    </div>
<?php 
        
    if($_POST){

        if(isset($_GET["action"]) && $_GET["action"] == "modifier"){
                                
            $resultat = executeRequete("UPDATE membre SET pseudo = '$_POST[pseudo]', mdp = MD5('$_POST[mdp]'), email = '$_POST[email]', adresse = '$_POST[adresse]', ville = '$_POST[ville]', cp = '$_POST[cp]', civilite = '$_POST[civilite]' WHERE pseudo = '$_GET[pseudo]' ");

            foreach($_POST as $key => $value){
                $_SESSION['membre'][$key] = htmlspecialchars(addslashes($value));
            }
            
            echo "<script>window.location.href='profil.php'</script>";
        }
    }
?>
    <br>
<?php
}else{
    header("location: connexion.php");
}

require_once('inc/bas.inc.php');
?>