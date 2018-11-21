function d(arg) {
    document.write(arg + "<br>");
}

/*
01 ---- Commentaires, Affichage, Concaténation
02 ---- Variables, Constantes, Type de données

03 ---- Opérateurs (logiques et arithmétiques)
04 ---- Les conditions

05 ---- Les boucles
06 ---- Fonctions (utilisateurs et prédéfinies)

07 ---- Array (tableaux)
08 ---- Object (objets)*/




// commentaire sur une ligne

// alert("j'affiche quelque chose");
console.log("hey je suis dans la console");

document.write("<h2>Commentaire, Affichage, Concaténation</h2>");

document.write("Bonjour" + " je m'appelle " + "Momo");

document.write("<h2>Variables, Constantes, Types de données</h2>");

/*
    Definition : variable est un espace nommé, appelé mémoire, qui permet de conserver une valeur le temps d'éxecution du script.
*/

// /!\ MAVARIABLE, Mavariable, ma variable, ma-variable, ma/variable, màVariable, maVarïable, 01maVariable : JAMAIS !!!! et attention aux noms de variables déjà reservés /!\
var maVariable = 1;
var monTexte = "du texte";
var monTableau = [1, 2, 3];
var monTableau2 = ["a", "b", "c"];

var maVariable2;
maVariable2 = 3;

var nom = "Ba", prenom = "Mohamed";

document.write(monTexte + maVariable);

//exo : déclarer une variable qui a pour valeur 15 et l'afficher 

var nombre = 15;
var valeur = 'valeur'
document.write(valeur + nombre);

//reprendre la variable que vous avez déclaré et lui donner une nouvelle valeur et l'afficher.

nombre = 8;
d(nombre);

var fruits = "pomme"; //pomme fraise
d(fruits);

fruits = fruits + " fraise";
d(fruits);

fruits += " banane";
d(fruits);

const MA_VARIABLE = 20;
d(MA_VARIABLE);

d(typeof MA_VARIABLE + " " + typeof maVariable + " " + typeof monTableau)
d(typeof monTexte);

// exo 3 : déclarer 3 variables (nom, prenom, age) et afficher une belle présentation et afficher le type de vos variables

var nom = "Ba";
var prénom = "Mohamed";
var age = 32;

d("je m'appelle " + nom + " " + prenom + " et j'ai " + age + " ans");
d(typeof nom + " " + typeof prenom + " " + typeof age)

d("<h2>Opérateurs (logiques et arithmétiques)</h2>");

var nbr1 = 2, nbr2 = 3, resultat;
resultat = nbr1 + nbr2;
//2 = 2 + 3
nbr1 += nbr2

//0 = 5
resultat = nbr1;

d(resultat);

resultat = nbr1 - nbr2
d(resultat);

resultat = nbr1 / nbr2
d(resultat);

resultat = nbr1 * nbr2
d(resultat);

//-= /= *= %=

d("<h2>Les conditions</h2>");

/*
> strictement supérieur
< strictement inférieur
>= supérieur ou égal
<= inférieur ou égal
= affectation
== comparaison de valeur
=== comparaison de valeur et type
!= différent de.
*/

var a = 4, b = 4, c = 8;

if (a = b) {
    d("oui a est égal à b");
}

if (a > c) {
    d("oui a est plus grand que c");
} else {
    d("non a n'est pas plus grand que c");
}


// &&
if (a == b && c > b) {
    d("true");
} else {
    d("false");
}

// ||
if (a == b || c < b) {
    d("true");
} else {
    d("false");
}

//exo : j'ai 3 variables 78,45,103 vérifier si 103 est plus grand que 78? si c'est le cas afficher la valeur de la variable la plus grande.

var un = 78, deux = 45, trois = 103;

if (trois > un) {
    d(trois + " est plus grand que " + un)
}

if (deux > un || trois > un) {
    d(trois + " est la valeur la plus grande")
}

var nbr6 = 10;

if (nbr6 > 10) {
    d("fait quelque chose");
} else if (nbr6 != 10) {
    d("fais autre chose");
} else if (nbr6 == 10) {
    d("oui 10 est égal à 10");
} else {
    d("aucune des condition n'est verifiée");
}

var couleur = "jaune";

switch (couleur) {
    case "bleu":
        d("j'aime le bleu");
        break;
    case "vert":
        d("j'aime trop le vert");
        break;
    case "jaune":
        d("j'adore le jaune");
        break;
    default:
        d("je n'aime aucune de ces nulles couleurs")
        break;
}

//===

if ("1" == 1) {
    d("true");
} else {
    d("false");
}

if ("1" === 1) {
    d("true");
} else {
    d("false");
}

//is Not a Number
if (isNaN(nbr6)) {
    d("true");
} else {
    d("false");
}

var dutext = "un text";
if (typeof dutext != "string") {
    d("true");
} else {
    d("false");
}

//si ce n'est pas !
if (!isNaN(nbr6)) {
    d("true");
} else {
    d("false");
}

//condition ternaire

var voiture = "bmw";
d((voiture == 'bmw') ? 'oui' : 'non');


//prompt()
// prompt("veuillez saisir votre nom:");

//exo : demandez l'age de l'utilisateur et ensuite afficher un message si il est mineur ou majeur. ATTENTION : si l'utilisateur saisi autre chose qu'un nombre afficher un message d'erreur

//parseInt()


// var user = Number(prompt("t'as quel âge ?"));
//ou var user = parseInt(prompt("t'as quel âge ?"));

//  if(user < 18){
//      d("Vous êtes mineur");
//  } else if(user >= 18){
//      d("Vous êtes majeur");
//  } else if(isNaN(user)){
//      d("Erreur");
//  }

d("<h2>Boucles</h2>");

//  BOUCLES FOR
//Incrémentation
for (var i = 0; i <= 10; i++) {
    d("je sui le message numero " + i);
}

//Décrementattion
for (var i = 10; i >= 0; i--) {
    d("je suis le message numero " + i);
}

//BOUCLES WHILE

var j = 0;

while (j <= 10) {
    d("je suis le message" + j);
    j++;
}

//DO WHILE

var k = 0;

do {
    d("je suis le message " + k);
    k++;
} while (k >= 10);

//exercice : demander à l'utilisateur d'entrer son âge tant que la valeur entrée par l'utilisateur est bien un nombre.

// var user;

// console.log(typeof user);

// do{
// var user = parseInt(prompt("T'as quel âge ?"));

// console.log(typeof user);

// if (user < 18) {
//     d("Vous êtes mineur");
// } else if (user >= 18) {
//     d("Vous êtes majeur");
// }
// } while (isNaN(user)) 




d("<h2>Fonctions prédéfinies et utilisateurs</h2>");

document.write("du texte");

var unePhrase = "bonjour comment vas-tu ?";
d(unePhrase.toUpperCase());

function addition(valeur1, valeur2){
    d("j'appelle la fonction addition");
    var resultat = valeur1 + valeur2;
    return resultat;
}
d(addition(1,6));

//exo : faire une fonction qui calcule la TVA d'un prix. (19.6)


function  appliquerTVA(prixHT){
    var prixTTC = prixHT * (1+0.196);
    return prixTTC;
}

d(appliquerTVA(155));//leprix de la TVA






