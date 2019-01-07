<style>
h2{
    margin: 0;
    padding: 10px;
    font-size: 25px;
    color: #000;
    background: gray;
}
</style>
<h2>Affichage et Ecriture</h2>
<?php
echo "<br>";
echo "Bonjour";
echo "<hr>";
echo "<h2>Les commentaires</h2>";
// commentaire sur une ligne
/* commentaire
sur
plusieurs
lignes */
# commentaire sur une ligne
print "<br>";
print "Nous sommes mercredi";
?>
<strong> 2 Janvier 2019 </strong>
<?= "<br><br> texte <br><br>" ?> <!-- remplace echo -->
<?php 
echo "<h2> Variables : type / déclaration / affectation </h2> <br>";
$a = 1247;
echo "$a : ";
echo gettype($a);
echo "<br><br>";
$b = 1.5;
echo "$b : ";
echo gettype($b);
echo "<br><br>";
$c = "une chaine";
echo "$c : ";
echo gettype($c);
echo "<br><br>";
$d = true;
echo "$d : ";
echo gettype($d);
echo "<br><br>";
echo "<h2> La concaténation </h2> <br>";
$x = "bonjour ";
$y = "tout le monde";
echo $x . $y . "<br>";
echo "$x $y <br>";
echo "bonjour", " tout le monde";
echo "<br><br>";
echo "<h2>La concaténation lors de l'affectation </h2> <br>";
$prenom = "Marie";
$prenom .= "-Curie";
echo $prenom;
echo "<br><br>";
echo "<h2>Guillemets et Quotes</h2> <br>";
$message = "aujourd'hui";
$message = 'aujourd\'hui';
$prenom2 = "Pierre";
$prenom3 = "Jacques";
echo "Bonjour $prenom3 et $prenom2 <br>";
echo 'Bonjour $prenom3 et $prenom2';
echo "<br><br>";
echo "<h2>Constante et Constante magique </h2> <br>";
define ("CAPITALE", "Paris");
echo CAPITALE . "<br>";
echo __FILE__ . "<br>";
echo __LINE__;
echo "<br><br>";
echo "<h2>Opérateurs arithmétiques</h2> <br>";
$a = 1; $b = 2;
$r = $a + $b;
echo $r;
// + * / -
echo "<br><br>";
echo "<h2>Structure conditionnelles - opérateurs de comparaison</h2> <br>";
// Isset et Empty
// Empty = tester si une variable est vide
// Isset = tester si une variable est définie
$var = "";
if(isset($var)) {echo "var existe et est définie par rien <br>";};
$var2 = 0;
if(empty($var2)) echo "0, vide ou non défini";
/*
   < superieur
   > inferieur
   <= superieur ou egal
   >= inferieur ou egal
   != different de
   !== different type et valeur
   == egalite
   === egalite type et valeur
   || ou
   && et
*/
//exercice : définir 2 variables a et b. a vaut 10 et b vaut '10' et verifier avec une condition si ils ont la meme valeur.
$a = 10; $b = '10';
echo "<br>";
if ($a == $b) {
    echo "true";
} else {
    echo "false";
}

echo"<h2>Fonction prédéfinies</h2>";
$email = "prenom@email.com";
echo strpos($email, "@");
//exercice: créer une variable email avc une adresse email et vérifier si c'est une adresse email valide ou pas
if(strpos($email, "@")){
	echo "true<br>";
} else{
	echo "false";
}

$email2 = "email";
var_dump(strpos($email, "@"));
echo "<br>";
var_dump(strpos($email2, "@"));

$phrase = "il était une fois, la belle et la bête";
echo "<br>" . iconv_strlen($phrase) . "<br>";

echo substr($phrase, 0, 19) . "..." . "<a href='#'>Lire la suite</a>";

echo"<h2>Fonction utilisateur</h2>";
function ecrir($arg){
	echo $arg . "<br>";
}

ecrir($phrase);

//Créer une fonction meteo, qui permet d'afficher la saison et la temperature. "Nous sommes en automne et il fait 1 degré".ATTENTION gérer le cas si degré est au pluriel ou au singulier

function meteo($temps, $saison){
	echo "Nous sommes en $saison et il fait $temps";
	if($temps > 1 || $temps < -1){
		echo " degrés";
	}else{
		echo " degré";
	}
}
meteo(-1, "hiver");

//fonction appliquerTVA 19.6 ! une fontion qui applique une TVA a 19.6 sur un prix
function tva($prix, $tva){
	$prix += $prix * $tva/100;
	return $prix;
}

echo tva(100, 19.6) . "<br>";

function bonjour(){
	echo "allo <br>";
	return "bonjour toto";
}
var_dump(bonjour()); 

echo"<h2>Boucles</h2>";
for($i = 0; $i < 10; $i++){
	ecrir($i);
}

echo "<select>";
	echo "<option>1</option>";
	echo "<option>2</option>";
	echo "<option>3</option>";
echo "</select>";

echo "<h2>Inclusion de fichiers</h2>";
echo "<p>cf main, header, navigation, etc.</p>";

echo "<h2>Les tableaux de données ARRAY</h2>";

$liste = array("greg", "nat", "pierre", "jacques");
ecrir("print_r(expression)");
echo "<pre>";
print_r($liste);
echo "</pre>";

ecrir("var_dump(expression)");
echo "<pre>";
var_dump($liste);
echo "</pre>";

$tab[] = "France";
$tab[] = "Maroc";
$tab[] = "Senegal";

echo "<pre>";
var_dump($tab);
echo "</pre>";

ecrir("sizeof(var)");
for($i = 0; $i < sizeof($liste); $i++){
    ecrir($liste[$i]);
}

ecrir("count(var)");
for($i = 0; $i < count($liste); $i++){
    ecrir($liste[$i]);
}

//avec la boucle while et do while

ecrir("boucle while");
$i = 0;
while($i < count($liste)){
    ecrir($liste[$i]);
    $i++;
}

ecrir("boucle do while");
$i = 0;
do{
    ecrir($liste[$i]);
    $i++;
    }while($i < count($liste));

//exercice : créer une liste de 10 fruits afficher la liste avec une boucle for, do et do while dans une liste en html(ul li)

$listefruits = array("fraise", "pomme", "banane", "framboise", "kiwi", "poire", "clementine", "orange", "cerise", "lytchee");

ecrir("sizeof(var)");
echo("<ul>");
for($i = 0; $i < sizeof($listefruits); $i++){
    ecrir("<li>$listefruits[$i]</li>");
    echo("</ul>");
}

ecrir("boucle while");
$i = 0;
echo("<ul>");
while($i < count($listefruits)){
    ecrir("<li>$listefruits[$i]</li>");
    $i++;
    echo("</ul>");
}

ecrir("boucle do while");
$i = 0;
echo("<ul>");
do{
    ecrir("<li>$listefruits[$i]</li>");
    $i++;
    }while($i < count($listefruits));
    echo("</ul>");

echo "<h2>La boucle foreach</h2>";

foreach ($listefruits as $key => $value){
    ecrir("$key - $value");
}

foreach ($liste as $x => $y){
    ecrir("$x - $y");
}

echo "<h2>Les tableaux multidimensionnels</h2>";

$tabMulti = array(0 => array("prenom" => "Mohamed", "nom" => "Ba") , 1 => array("prenom" => "John", "nom" => "Caffey"));

ecrir("<pre>");
print_r($tabMulti);
ecrir("</pre>");


//exercice : afficher les prénoms de ce tableau avec une boucle FOR

for($i = 0; $i < sizeof($tabMulti) ; $i++){
    ecrir ($tabMulti[$i]["prenom"]);
 }

 ecrir("<h3>ma boucle foreach</h3>");
 
 foreach($tabMulti as $key => $value) {
    foreach ($value as $key2 => $value2) {
        ecrir("$key2 => $value2");
    }
 }

 echo "<h2>Les objets</h2>";

 class Etudiant
 {
     //public, private & protected = encapsulation en programmation orientée objet
     public $prenom = "Jules";
     public $age = 25;

     public function resident(){
         return "France";
     }
 }

 $objet = new Etudiant();

 echo $objet->prenom . "<br>";
 echo $objet->age . "<br>";
 echo $objet->resident() . "<br>";


 //modifier le prenom de l'objet et l'afficher

 $objet->prenom = "Momo";
 echo $objet->prenom . "<br>";

 //exercice : creer un objet animal, ensuite declarer les attributs race, couleur, catégorie. ainsi que les méthodes manger, boire, voler, courir, nager. ensuite créer un dauphin un lion et un aigle.

 class Animal
 {
     public $race;
     public $couleur;
     public $categorie;
 }

 $dauphin = new Animal("dauphin", "mamifère", "bleu");


 phpinfo();
?>