<?php

class A 
{
    public function direBonjour()
    {
        return "Bonjour";
    }
}

//---------------------------------

class B // la class B n'hérite pas de la classe A
{
    public $mavariable;
    public function __construct()
    {
        $this->mavariable = new A; // je créer un objet que je place dans la propriété $mavariable de mon objet B
        echo '<pre>'; var_dump($this->mavariable); echo '</pre>';
    }
    public function uneMethode()
    {
        return $this->mavariable->direBonjour(); // dans mon objet B ($this), je peux appeler des méthodes sur mon objet A. Habituellement nous ne mettons qu'une seule flèche, mais la, $mavariable contient un objet, une autre flèche est donc possible.
    }
}

//--------------------------------

$b = new B;

// echo '<pre>'; var_dump(get_class_methods($b)); echo '</pre>';
echo $b->uneMethode() . '<hr>';
echo $b->mavariable->direBonjour() . '<hr>';