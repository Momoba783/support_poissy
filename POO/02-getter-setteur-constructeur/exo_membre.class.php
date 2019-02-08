<?php

//Au vu de cette classe, vous allez renseigner les propriétés : pseudo et mdp (getteurs et setteurs) et faites les affichages nécessaires

class Membre
{
    private $pseudo;
    private $mdp;

    public function setPseudo($pseudo)
    {
       $this->pseudo = $pseudo;
    }

    public function getPseudo() //jamais d'arguments ds le getteur
    {
        return $this->pseudo;
    }
    public function setMdp($mdp)
    {
       $this->mdp = $mdp;
    }
    
    public function getMdp()
    {
        return $this->mdp;
    }
}

//---------------------------------------------
$membre = new Membre;
$membre->setPseudo("MomoBa");
echo "Pseudo : " . $membre->getPseudo() . '<br>';

$membre->setMdp("Macadamia");
echo "Password : " . $membre->getMdp() . '<br>';