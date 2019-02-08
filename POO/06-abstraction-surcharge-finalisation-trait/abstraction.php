<?php

abstract class Joueur
{
    public function seConnecter()
    {
        return $this->EtreMajeur();
    }
    abstract public function EtreMajeur();
    abstract public function Devise();
}

//------------------------------------------------------

class JoueurFr extends Joueur
{
    public function EtreMajeur()
    {
        return 18;
    }
    public function Devise()
    {
        return "€";
    }
}

//-------------------------------------------------------

class JoueurUs extends Joueur
{
    public function EtreMajeur()
    {
        return 21;
    }
    public function Devise()
    {
        return "$";
    }
}
//-------------------------------------------------------

// $joueur = new Joueur; /!\ erreur !! il n'est pas possible d'instancier une classe abstraite ! JAMAIS ! 
//Pour déclarer des méthodes 'abstraites' il faut que la classe soit 'abstraite'

//-------------------------------------------------------

$joueur = new JoueurFr;

echo "Vous devez avoir au moins <strong> " . $joueur->SeConnecter() . "</strong> ans pour jouer ! <hr>";
echo "Vous devez avoir au moins <strong> " . $joueur->EtreMajeur() . "</strong> ans pour jouer ! <hr>";
echo "La devise est en <strong> " . $joueur->Devise() . "</strong> <hr>";

$joueur2 = new JoueurUs;

echo "Vous devez avoir au moins <strong> " . $joueur2->SeConnecter() . "</strong> ans pour jouer ! <hr>";
echo "Vous devez avoir au moins <strong> " . $joueur2->EtreMajeur() . "</strong> ans pour jouer ! <hr>";
echo "La devise est en <strong> " . $joueur2->Devise() . "</strong> <hr>";

/* 
    - Une classe abstraite n'est pas instanciable
    - Les méthodes abstraites n'ont pas de contenu
    - Lorsque l'on hérite de méthodes abstraites, nous sommes obligé de les redéfinir
    - Pour définir des méthodes abstraites, il est nécessaire que la classe qui les contient soit abstraite

    Le développeur qui écrit la classe 'Joueur' est au coeur de l'application (noyau) et va obliger les autres développeur à redéfinir la méthode EtreMajeur() et Devise().
    C'est une bonne méthode de travail. On impose de bonnes contraintes.
*/

