<?php
class Etudiant
{
    private $prenom; //Mohamed
    public function __construct($arg)
    {                                                                //Mohamed
        echo "Instanciation, nous avons reçu l'information suivante : $arg<br>";
                               //Mohamed
        return $this->setPrenom($arg);
        // return $etudiant->setPrenom($arg);
    }
    public function getPrenom()
    {
        //// return $etudiant->prenom
        return $this->prenom;
    }                        //Mohamed
    public function setPrenom($arg)
    {
        //Tous les controles sur les données sont ici
        $this->prenom = $arg;
        // $etudiant->prenom = 'Mohamed';
    }
}

//------------------------------------------------------------------------
$etudiant = new Etudiant('Mohamed');// __construct est appelé automatiquement, nous mettons un argument après le nom de la classe qui attérit directement dans le constructeur.
echo "<pre>"; var_dump($etudiant); echo "</pre>";

echo "Prénom : " . $etudiant->getPrenom() . '<hr>';

$etudiant->__construct('Momo'); //le constructeur peut tout de même être appelé comme une méthode "classique"
echo "Prénom : " . $etudiant->getPrenom() . '<hr>';

$etudiant->setPrenom('Mimi');
echo "Prénom : " . $etudiant->getPrenom() . '<hr>';

/*

EXEMPLE D'INSERTION : c'est le getteur qui permettrait d'exploiter la donnée finale et de l'insérer dans une BDD
$bdd->exec(INSERT INTO employes (prenom) VALUE ($etudiant->getPrenom())));

__construct() est une méthode magique qui s'execute automatiquement, elle sera l'équivalent du init.php avec session_start(), connexion à la BDD, autoload etc...

setteur : permet de controler les données
getteur : permet de voir / exploiter les données finales
private $prenom : la propriété est privée afin que l'on ne puisse pas la remplir à l'exterieur de la classe sans avoir fait des controles au préalable, c'est a dire sans être passé par les getteur / setteur 
dans notre cas lorqu'on instancie la classe, les données vont directement au setteur, c'est une sécurité, on sait que les données ne vont pas nimporte où.

Si nous avons un formulaire avec 20 champs, nous aurons autant de getteur et de setteur qu'il y a de champs --> 20 getteurs - 20 setteurs.

*/
