<?php

class Singleton
{
    public $numero = 20;
    private static $instance = null;
    private function __constructor(){}// la classe n'est pas instanciable car le constructeur est privé
    private function __clone(){}//l'objet ne sera pas clonable
    public static function getInstance()
    {
        if(is_null(self::$instance))// si instance est null, la 1re fois c'est null, toutes les autres fois, je ne rentre pas ici car il y a l'objet dans $instance
        {
            self::$instance = new Singleton;//on stock un objet de la classe 'Singleton' dans $instance
        }
        return self::$instance;// dans tous les cas je retourne un objet $instance
    }
}

//-----------------------------------------
// $s = new Singleton; // erreur normal car le constructeur est privé donc la classe n'est pas instanciable 
$objet1 = Singleton::getInstance();
echo '<pre>'; var_dump($objet1); echo '</pre>'; // objet1 est à la référence #1

$objet2 = Singleton::getInstance();// objet2 est à la référence #1, il sagit du même objet
echo '<pre>'; var_dump($objet2); echo '</pre>';

echo $objet1->numero . "<br>";
echo $objet2->numero . "<br>";
$objet2->numero = 21;
echo $objet2->numero . "<br>";
echo $objet1->numero . "<br>";