<!DOCTYPE html>

<html>
   <head>
       <meta charset="UTF-8">
       <title>La Méthode GET</title>
   </head>

   <body>

       <?php
       $nom = "Ba";
       $prenom = "Mohamed";
       ?>

       <a href="cible.php?nom=<?=$nom?> &amp; prenom=<?=$prenom?>">Clique ici !</a>

   </body>

</html>