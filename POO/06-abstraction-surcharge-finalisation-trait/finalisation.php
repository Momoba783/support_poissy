<?php

final class Application
{
    public function lancementApplication()
    {
        return "L'appli se lance comme ça";
    }
}

//----------------------------------------------------
$app = new Application;
echo '<pre>'; var_dump($app); echo '</pre>';


// class Test extends Application {} /!\ erreur !! Il est impossible d'hériter d'une classe 'Final'

//----------------------------------------------------
class Application2
{
    final public function lancementApplication()
    {
        return "L'appli se lance comme ça !!";
    }
}

class Extension extends Application2
{
    // public function lancementApplication(){} /!\ erreur ! Je ne peux pas surcharger ou redéfinir une méthode finale
}
//---------------------------------------------------

$ext = new Extension;
echo $ext->lancementApplication();

/*
    - Une class finale ne peut pas être héritée
    - Une class finale reste instanciable
    - Une méthode finale peut être présente dans une classe normale
    - Une méthode finale permet d'éviter qu'elle soit redéfinie ou surchargée
    - L'intéret de mettre le mot clé 'final' sur une méthode est de vérouiller afin d'empêcher tout sous-classe de la redéfinir (quand nous voulons que le comportement de la méthode soit préservé durant l'héritage)
*/