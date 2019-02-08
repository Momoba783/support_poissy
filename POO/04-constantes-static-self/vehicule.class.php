<?php
class Vehicule
{
    private static $marque = 'BMW';
    private $couleur = 'noir';

    public static function setMarque($marque)
    {
        self::$marque = $marque;
    }
    public static function getMarque()
    {
        return self::$marque;
    }
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
}

//--------------------------------------
$vehicule1 = new Vehicule;
echo "Véhicule 1 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong> " . $vehicule1->getCouleur() . "</strong><br>";

$vehicule2 = new Vehicule;
$vehicule2->setCouleur('rouge');
echo "Véhicule 2 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong> " . $vehicule2->getCouleur() . "</strong><br>";

$vehicule3 = new Vehicule;
echo "Véhicule 3 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong> " . $vehicule3->getCouleur() . "</strong><br>";

$vehicule4 = new Vehicule;
Vehicule::setMarque('Bentley');
echo "Véhicule 4 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong> " . $vehicule4->getCouleur() . "</strong><br>";

$vehicule5 = new Vehicule;
echo "Véhicule 5 de marque <strong>" . Vehicule::getMarque() . "</strong> et de couleur <strong> " . $vehicule5->getCouleur() . "</strong><br>";

/*

Un élément déclaré comme 'static' appartient à la classe et non à l'objet. Si je modifie un élément 'static' je modifie la classe elle même.
$objet-> élément d'un objet à l'exterieur de la classe
$this-> élément d'un objet à l'interieur de la classe
class::élément de la classe à l'exterieur de la classe
self::élément d'une classe à l'intérieur de la classe

*/
