<?php

class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __set($nom, $valeur)
    {
        echo "La propriété <strong>$nom</strong> n'existe pas, la valeur <strong>$valeur</strong> n'a donc pas été affectée.<br>";
    }
    //__set() est une méthode magique qui se déclenche uniquement en cas de tentative d'affectation sur une propriété qui n'existe pas.

    public function __get($nom)
    {
        echo "La propriété $nom n'existe pas, on ne peut donc pas l'afficher <br>";
    } // ___get() est une méthode magique qui s'execute uniquement en cas de tentative d'affichage d'une propriété qui n'existe pas, donc que nous n'avons pas déclaré

    public function __call($nom, $argument)
    {
        echo "La fonction $nom n'existe pas, on ne peut donc pas l'executer. Les arguments étaient" . implode("-", $argument) . "<br>";
    }// __call() est une méthode magique qui s'execute uniquement en cas de tentative d'execution d'une methode qui n'existe pas, donc qui n'a pas été déclaré

}

$societe1 = new Societe;

$societe1->villes = "Paris"; // tentative d'affectation a une propriété qui n'a pas été déclarée

echo $societe1->titre; // tentative d'affichage d'une propriété qui n'a pas été déclarée

echo $societe1->erreur(1,2,3); // tentative d'execution d'une méthode qui n'a pas été déclarée

echo "<pre>"; var_dump($societe1); echo "</pre>";

/*
    Il y a trop d'erreur "sale" en PHP, les méthodes magiques permettent d'afficher des erreurs "propres" en français
*/