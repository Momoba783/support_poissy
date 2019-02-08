<?php

class Compteur
{
    public static $nbInstanceClass = 0;//appartient a la classe
    public $nbInstanceObjet = 0; //appartient à l'objet
    public function __construct()
    {
        ++self::$nbInstanceClass; //self::$nbInstanceClass + 1
        ++$this->nbInstanceObjet; //this->nbInstanceObjet + 1
    }
}
// on observe que la variable $nbInstanceObjet à la valeur de 1 pour chaque objet, elle appartient donc à l'objet
// on observe que la variable $nbInstanceClass à la valeur de 5, elle appartient donc à la classe

//-------------------------------------
$c1 = new Compteur;
$c2 = new Compteur;
$c3 = new Compteur;
$c4 = new Compteur;
$c5 = new Compteur;

//------------------------------------
echo "La classe a été instanciée <strong>" . Compteur::$nbInstanceClass . "</strong> fois. <hr>";
echo "L'objet a été instancié <strong>" . $c5->nbInstanceObjet . "</strong> fois. <hr>";