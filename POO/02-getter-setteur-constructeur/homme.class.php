<?php

class Homme
{
    private $error;
    private $prenom;
    private $nom;            
    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->prenom = $prenom;
        }
        else
        {
            $this->error = trigger_error("ce n'est pas un string", E_USER_WARNING);
            return $this->error;
        }
    }

    public function getPrenom() //jamais d'arguments ds le getteur
    {
        return $this->prenom;
    }
    public function setNom($nom)
    {
        if(is_string($nom))
            $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
}

//------------------------------------------------------------------------
$homme = new Homme;
$homme->setPrenom("Angela");
echo $homme->getPrenom() . " ";

$homme->setNom("Anaconda");
echo $homme->getNom() . '<br>';

//-------------------------------------------------------------------------
$homme2 = new Homme;
echo $homme2->getPrenom() . " "; //cette ligne ne donne aucun prenom car j'ai instancié l'objet dans la variable $homme2. preuve qu'au dessus on modifie bien l'objet et non la classe

echo $homme2->getNom() . '<br>';

//$this représente l'objet à l'interieur de la classe.