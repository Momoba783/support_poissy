<?php

abstract class Vehicule
{
    final public function demarrer()
    {
        return "Je démarre";
    }
    abstract public function carburant();

    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}

class Peugeot extends Vehicule
{
      public function carburant()
    {
        return "diesel";
    }
    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 70;
    }
    
}

class Renault extends Vehicule
{
    public function carburant()
    {
        return "essence";
    }
    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 30;
    }
}


/*
    1. faire en sorte de ne pas avoir d'objet vehicule
    2. obligation pour la Renault et la Peugeot de posséder la même méthode demarre() qu'un véhicule de base
    3. Obligation pour la Renault de déclarer un carburant diesel et pour la peugeot de déclarer un carburant essence
    4. La Renault doit effectuer 30 tests de plus qu'un véhicule de base
    5. La Peugeot doit effectuer 70 tests de plus qu'un véhicule de base
    6. Effectuer les affichages nécessaires
*/


$peugeot = new Peugeot;

echo $peugeot->demarrer() . "<br>";
echo "Ma Peugeot roule au <strong> " . $peugeot->carburant() . "</strong> et elle a effectué <strong> " . $peugeot->nombreDeTestObligatoire() . "</strong> tests obligatoires.<br>";

$renault = new Renault;

echo $renault->demarrer() . "<br>";
echo "Ma Renault roule à l'<strong>" . $renault->carburant() . "</strong> et elle a effectué <strong> " . $renault->nombreDeTestObligatoire() . "</strong> tests obligatoires.<hr>";
