<?php

$content="";

if($_POST){
    if(htmlspecialchars($_POST['mdp']) != "lepoles"){
         $content .= "<div class=\"alert alert-danger\" role=\" alert\">Accès refusé</div>";
    } else{
        $content .= "<div class=\"alert alert-success\" role=\" alert\">Accès accepté " . htmlspecialchars($_POST['pseudo']) . "</div>";
    }
}

?>    

<!DOCTYPE html>

<html>
   <head>
       <meta charset="UTF-8">
       <title>La Méthode POST</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   </head>

   <body>
       <form action="" method="post">
           <p><label>Pseudo : <input type="text" name="pseudo"></label></p>
           <p><label>Mot de passe : <input type="password" name="mdp"></label></p>
           <input type="submit" value="valider">
    </form>
 </body>

</html>