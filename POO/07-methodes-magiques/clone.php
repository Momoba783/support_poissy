<?php

class Ecole
{
    public $nom = "WF3";
    public $cp = 78;
    public function __clone()
    {
        $this->cp = 92;
    }
}

//---------------------------------------
$ecole1 = new Ecole;
$ecole1->cp = 75;
echo '<pre>'; var_dump($ecole1); echo '</pre>';

$ecole2 = new Ecole;
echo '<pre>'; var_dump($ecole2); echo '</pre>';

$ecole3 = $ecole1;
echo '<pre>'; var_dump($ecole3); echo '</pre>';
//Lorsque je modifie $ecole1 cela prend effet sur $ecole3 et vice-versa, $ecole1 et $ecole3 sont des références qui pointent vers le même objet a l'identifiant 1. Ils représentent le même objet.

$ecole3->cp = 93;
echo "Ecole1 > " . $ecole1->cp . "<hr>";
echo "Ecole3 > " . $ecole3->cp . "<hr>";

$ecole4 = clone $ecole2;
echo '<pre>'; var_dump($ecole4); echo '</pre>';
