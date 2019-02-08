<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace";
    }
    public function manger()
    {
        return "Je mange chaque jour";
    }
}

//-----------------------------------------------------
class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un  éléphant et " . $this->deplacement(); // j'utilise la méthode deplacement() qui est protected dont j'herite (executable uniquement dans la classe mère ou dans la classe fille)
    }
}
//----------------------------------------------------
class Chat extends Animal // extends permet d'hériter d'une classe
{
    public function quiSuisJe()
    {
        return "Je suis le chat";
    }
    public function manger()
    {
        return "Je me goinfre comme un gros chat";
    }
    
}

// Il n'est pas possible d'hériter de plusieurs classes en même temps
//----------------------------------------------------
$elephant = new Elephant;
echo '<pre>'; var_dump(get_class_methods($elephant)); echo '</pre>';
echo $elephant->manger() . '<hr>';
echo $elephant->quiSuisJe() . '<hr>';

//----------------------------------------------------
$chat = new Chat;
echo $chat->manger() . '<hr>';
echo $chat->quiSuisJe() . '<hr>'; //affiche "Je me goinfre comme un gros chat" et non pas "Je mange chaque jour" car la méthode a été redéfinie dans la classe "Chat". L'interpréteur cherche dabord dans la class Chat, et seulement si la méthode n'avait pas été trouvée, il aurait cherché dans la classe dont j'hérite.