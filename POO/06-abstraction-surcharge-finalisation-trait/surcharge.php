<?php

class A 
{
    public function calcul()
    {
        return 10;
    }
}

//----------------------------------------------

class B extends A 
{
    public function calcul() // redéfinition
    {
        $nb = parent::calcul();
        // parent fonctionne pour appeler une méthode d'une classe parente lors d'une SURCHARGE (afin d'éviter qu'elle ne s'appelle elle même $this->calcul car elle est redéfinie)

        if($nb <= 100) return "$nb est inférieur ou égal à 100";
        else           return "$nb est supérieur à 100";
    }
    public function autreCalcul()
    {
        $nb = parent::calcul(); //il est possible d'atteindre une méthode de mon parent même si il n'y a pas de redéfinition
        return $nb;
    }
}

//---------------------------------------------
// surcharge -override : une redéfinition + surcharge me permet de prendre en compte le comportement de ma fonction d'origine et d'y ajouter un traitement complémentaire
// contexte => pour la surcharge, si on faisait pas ça dans wordpress, on ne pourrais pas mettre à jour le CMS, on modifierai directement les fonctions du coeur !
$b = new B;
echo $b->calcul() . "<hr>";
echo $b->autreCalcul() . "<hr>";