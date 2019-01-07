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
       $numero = "0768248581";
       $age = 32;
       $id = 1;
       ?>

       <a href="cibleexo.php?nom=<?=$nom?> &amp; prenom=<?=$prenom?> &amp; numero=<?=$numero?> &amp; age=<?=$age?> &amp; id=<?=$id?>">Clique ici !</a>

   </body>

</html>