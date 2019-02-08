<?php

class Maison
{
    private static $nbPiece = 7;
    public static $espaceTerrain = "500m²";
    public $couleur = "blanc";
    const HAUTEUR = "10m";
    private $nbPorte = 10;
    public static function getNbPiece()
    {
        return self::$nbPiece;
    }
    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}

// 1 - Afficher le nbe de pieces dans la maison 

// 2 - Afficher l'espace terrain de la maison 

// 3 - Afficher la hauteur de la maison 

// 4 - Afficher la couleur de la maison 

// 5 - Afficher le nombre de portes de la maison 

$maison = new Maison;
echo "il y a <strong> " . Maison::getNbPiece() . "</strong> pièces dans la maison <br>";
echo "L'espace terrain de la maison est de <strong> " . Maison::$espaceTerrain . "</strong><br>";
echo "La hauteur de la maison est de <strong> " . Maison::HAUTEUR . "</strong><br>";
echo "La maison est de couleur <strong> " . $maison->couleur . "</strong><br>";
echo "il y a <strong> " . $maison->getNbPorte() . "</strong> portes dans la maison <br>";

// echo $maison::$espaceTerrain; // devrait donner une erreur, c'est du nimporte quoi !!!!
// echo $maison->espaceTerrain. /!\ erreur !! je ne dois appeler une propriété static avec mon objet
echo $maison->getNbPiece();  ///!\devrait donner une erreur !! car la méthode est static, il faudrait l'appeler avec la classe
echo Maison::$couleur;