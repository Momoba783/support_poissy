<?php
class Panier
{
    public $nbProduits;
    public function ajouterArticle()
    {
        return "L'article a été ajouté !";
    }
    protected function retirerArticle()
    {
        return "L'article a été retiré.";
    }
    private function afficherArticle()
    {
        return "Voici les articles :";
    }
}

$panier1 = new Panier;
echo '<pre>'; var_dump($panier1); echo '</pre>'; //on observe un objet issu de la classe "Panier" à l'identifiant 1(reference de l'objet).

echo '<pre>'; var_dump(get_class_methods($panier1)); echo '</pre>'; //get_class_methods() est une fonction prédéfinie permettant d'observer les méthodes issues d'une classe.

$panier1->nbProduits = 5;
echo '<pre>'; print_r($panier1); echo '</pre>';

echo "Nombre de produits dans le panier 1 : " . $panier1->nbProduits . '<br>'; //on pioche une propriété de la classe à travers l'objet, pas de parenthèses, c'est une propriété / propriété public OK
echo "Panier1 > " . $panier1->ajouterArticle() . '<br>';//on pioche une méthode de la classe à travers l'objet, des parenthèses car c'est une methode / méthode public OK

// echo "Panier1>" . $panier1->retirerArticle() . '<br>'; /!\ erreur !! méthode protected !! l'élément est accessible uniquement dans la classe où cela a été déclaré dans les classes héritières.

// echo "Panier1 > " . $panier1->afficherArticle() . '<br>';  /!\ erreur !! méthode private !! l'élement est accessible uniquement dans la classe où cela a été déclaré

$panier2 = new Panier;
echo '<pre>'; var_dump($panier2); echo '</pre>'; 

$panier2->nbProduits =3;
echo "Nombre de produits dans le panier 2 : " . $panier2->nbProduits . '<br>';

/*
    Niveau de visibilité
        - public : accessible de partout
        - productivité : accessible dans la classe mère et héritières
        -private : accessible dans la classe mère

    'new' est un mot clé permettant d'effectuer une instanciation. Une classe peut produire plusieurs objet. Nous pouvons effectuer plusieurs instanciations 'new'
    $panier1 représente l'objet issu de la classe 'Panier'
    La classe est le plan de construction / $panier1 représente un exemplaire de la classe.' 
*/
