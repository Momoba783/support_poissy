<?php

class Electricien
{
    public function getSpecialiste()
    {
        return "pose de câbles, disjoncteurs, tableaux ou armoires électriques... <hr>";
    }
    public function getHoraires()
    {
        return "10h/18h";
    }
}

//--------------------------------------------------------------------

class Plombier
{
    public function getSpecialiste()
    {
        return "tuyaux, robinets, chauffe-eau, compteurs... <hr>";
    }
    public function getHoraires()
    {
        return "8h/19h";
    }
}

//--------------------------------------------------------------------

class Entreprise 
{                  //1
    public $numero = 0;          //Plombier
    public function appelEmploye($employe)
    {
        $this->numero++;
        //$this->monEmploye1 = new Plombier
        $this->{"monEmploye" . $this->numero} = new $employe;//création de variable dynamique dans laquelle on stock une instance
        return $this->{"monEmploye" . $this->numero};//on retourne l'objet crée
    }
}

//---------------------------------------------------------------------

$entreprise = new Entreprise;

$entreprise->appelEmploye('Plombier');
echo '<pre>'; var_dump($entreprise); echo '</pre>';
echo $entreprise->monEmploye1->getSpecialiste();
echo $entreprise->monEmploye1->getHoraires();

//Exo : faire la même chose pour la class Electricien

$entreprise->appelEmploye('Electricien');
echo '<pre>'; var_dump($entreprise); echo '</pre>';
echo $entreprise->monEmploye2->getSpecialiste();
echo $entreprise->monEmploye2->getHoraires();