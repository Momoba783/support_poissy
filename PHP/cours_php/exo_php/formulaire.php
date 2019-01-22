<form action="" method="post">
<p>
<strong>Nom<span style="color: #ff0000;">*</span> :</strong> <label for="nom"> </label> <input id="nom" name="nom"type="text" /> <br /><br /> 

<strong>Prénom :</strong> <label for="prenom"></label> <input id="prenom" name="prenom"  type="text" /> <br /><br />

<strong>Adresse : </strong><br /> <label for="adresse"></label> <input id="adresse" name="adresse" type="text" /> <br /><br /> 

<strong>Code Postal  :</strong> <label for="code"></label> <input id="code" name="code" type="text" /> <br /><br /> 

<strong>Ville : </strong> <label for="ville"></label> <input id="ville" name="ville" type="text" /> <br /><br /> 

<strong>Mail <span style="color: #ff0000;">*</span> : </strong><br /> <label for="mail"> </label><input id="mail" name="mail" type="text" /></p>

<input type="submit" name="envoyer">

<?php
    
    $content = "";
    $informations ="";

    if($_POST){

        $file = fopen("contact.txt", "a+") or die ("file not open");

        foreach ($_POST as $key => $value) {
            if(empty($value)){
                $content .= "<div class=\"alert alert-danger\"> veuillez remplir les champs " . $key . "</div>";
            } else{
                $informations = $key . " : "  . strip_tags($value) . PHP_EOL;
                fputs($file, $informations);
            }
        
        }

        fputs($file, "--------------" . PHP_EOL);

        fclose($file);
    
    }
?>