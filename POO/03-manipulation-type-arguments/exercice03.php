<?php
/*
UML

-------------------
|Vehicule          |  1. Création d'un véhicule 1
-------------------   2. Attribuer un nombre de litres d'essence au véhicule 1 : 5
|$litresEssence    |  3. Afficher le nombre de litres d'essence du vehicule 1
-------------------   4. Création d'une pompe
|setLitresEssence()|  5. Attribuer un nombre de litres d'essence à la pompe : 800
|getLitresEssence()|  6. Afficher le nombre de lires d'essence de la pompe
-------------------   7. La pompe donne de l'essence en faisant le plein au vehicule 1 (50L)
                      8. Afficher le nombre de litres d'essence de la voiture après ravitaillement
-------------------   9. Afficher le nombre de litres restants à la pompe
|Pompe             |
-------------------    public function donnerEssence(Vehicule $v);
|$litresEssence    |
-------------------
|setLitresEssence()|
|getLitresEssence()|
|donnerEssence()   |
-------------------

*/

class Vehicule
{
    private $litresEssence;
    public function setLitresEssence($litresEssence)
    {
       $this->litresEssence = $litresEssence;
    }

    public function getLitresEssence() //jamais d'arguments ds le getteur
    {
        return $this->litresEssence;
    }
}

class Pompe
{
    private $litresEssence;
    public function setLitresEssence($litresEssence)
    {
       $this->litresEssence = $litresEssence;
    }

    public function getLitresEssence() 
    {
        return $this->litresEssence;
    }

    public function donnerEssence(Vehicule $v) // $v représente un objet de type 'Vehicule', du coup nous avons accès aux méthodes de la classe 'Vehicule' dans la classe 'Pompe'.
    {
        $this->setLitresEssence($this->getLitresEssence()-(50 - $v->getLitresEssence()));
        //                          800                  - 50 - 5
        $v->setLitresEssence($v->getLitresEssence()+(50 - $v->getLitresEssence()));
        //                           5             +       50 - 5
    }
}

//-------------------------------------------------------------------------------------
$vehicule1 = new Vehicule;
$vehicule1->setLitresEssence(5);
echo "Il y a " . $vehicule1->getLitresEssence() . " litres dans le véhicule 1 <br>";

// ------------------------------------------------------------------------------------
$pompe = new Pompe;
$pompe->setLitresEssence(800);
echo "Il y a " . $pompe->getLitresEssence() . " litres à la pompe <br>";

//-------------------------------------------------------------------------------------
$pompe->donnerEssence($vehicule1);

//-------------------------------------------------------------------------------------
echo "Après ravitaillement, le véhicule 1 possède <strong>" . $vehicule1->getLitresEssence() . "</strong> litres d'essence<br>";

//-------------------------------------------------------------------------------------
echo "Après ravitaillement, la pompe possède <strong>" . $pompe->getLitresEssence() . "</strong> litres d'essence<br>";

