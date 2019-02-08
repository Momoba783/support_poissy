<?php

class A 
{
    public function test1()
    {
        return "test1";
    }
}

//-------------------------------------

class B extends A 
{
    public function test2()
    {
        return "test2";
    }
}

//-------------------------------------

class C extends B 
{
    public function test3()
    {
        return "test3";
    }
}

//--------------------------------------
// EXO : créer un objet issu de la class C et afficher les méthodes issues de la class

$c = new C;
echo '<pre>'; var_dump($c); echo '</pre>';
echo '<pre>'; var_dump(get_class_methods($c)); echo '</pre>';
echo $c->test1() . "<br>";
echo $c->test2() . "<br>";
echo $c->test3() . "<br>";

// Si C hérite de B, alors C hérite de A aussi