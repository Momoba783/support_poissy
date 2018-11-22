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

function addition(valeur1, valeur2) {
    d("j'appelle la fonction addition");
    var resultat = valeur1 + valeur2;
    return resultat;
}
d(addition(1, 6));

//exo : faire une fonction qui calcule la TVA d'un prix. (19.6)



//exercice faire une fonction qui calcule la TVA d'un prix. (19.6)

function appliquerTVA(prixHT) {

    var prixTTC = prixHT * (1 + 0.196);
    return prixTTC;
}

d(appliquerTVA(155));//le prix avec la TVA

//creer une fonction appliquerTVA2 qui permet de calculer le prix TTC
// avec une TVA définie par l'utilisateur par exemple
//appliquerTVA2(155,19.6)

function appliquerTVA2(prixHT, TVA) {
    var prixTTC = prixHT * (1 + TVA / 100);
    return prixTTC.toFixed(2);
}

d(appliquerTVA2(155, 5.5));

//amélioration possible, afficher seulement 2 chiffres après la
//virgule :) toFixed()

//function maFuntion(){}

var maFonction = function () {
    document.write("je suis maFonction <br>");
}

maFonction();


//IIFE = Immediatly Invoked Function Expression
(function () {
    d("bonjour je suis la fonction anonyme");
})();

//ecrire une fonction qui verifie l'age de l'utilisateur

function verifierAge(age) {

    if (age >= 18) {
        d("vous etes majeur");
    }

    if (age < 18) {
        d("vous etes mineur");
    }
}

//faire une fonction qui demande l'age de l'utilisateur et qui verifie son age

function demanderAge() {

    do {
        age = parseInt(prompt("veuillez saisir un age "));

    } while (isNaN(age))
}

//ecrire une fonction qui demande le nom et prenom de l'utilisateur, ensuite
//afficher une présentation de celui-ci.

function informations() {
    var nom, prenom;

    nom = prompt("Veuillez saisir votre nom : ");
    prenom = prompt("Veuillez saisir votre prenom : ");

    d("Bonjour " + nom + " " + prenom);
}

//ecrire une fonction qui affiche un "Hello world" x fois défini par
//l'utilisateur par exemple afficherPhrase(100);


function afficherPhrase(nombre) {
    for (var i = 1; i <= nombre; i++) {
        d("Hello world " + i);
    }
}

afficherPhrase(10);

//fonction presentationFinale(), vous demandez l'age de l'utilisateur,
//son nom son prenom, et vous verifier aussi son age (mineur ou majeur)
//ensuite vous afficher une presentation de celui-ci

function presentationFinale() {
    demanderAge();
    informations();
    verifierAge(age)
}

presentationFinale();

//ecrire une fonction qui verifie le type de donnée
//d'une variable par exemple verifie(maVariable)

function verifie(x) {
    d(typeof x);
}

verifie(maVariable);


//Ecrire une fonction qui affiche un message pour informer l'utilisateur si la variable qu'il teste est de type "chaine de caractères" ou "nombre". Par exemple vérifie(maVariable) ---> "Votre variable est de type : "

function verifier(maVariable) {
    if (typeof maVariable == "string") {
        d("Votre variable est de type " + typeof maVariable);
    }
    else if (typeof maVariable == "number") {
        d("Votre variable est de type " + typeof maVariable);
    }
    else {
        d("Votre variable est de type " + typeof maVariable);
    }
}

verifier("du texte");
verifier(15);
verifier([1, 2, 3]);


//Portée global d'une variable (variable en dehors de la fonction)

var animal = "un chien";

function test() {
    d(animal);
}

test();

//Portée locale d'une variable (variable dans la fonction (avec le mot var))
function test2() {
    var animal2 = "un chat";
    d(animal2);
}

d("<h2>Array (les tableaux)</h2>");

var liste_fruits = ["fraise", "pomme", "banane", "peche", "fraise", "pomme", "banane", "peche", "fraise", "pomme", "banane", "peche", "fraise", "pomme", "banane", "peche", "fraise", "pomme", "banane", "peche", "fraise", "pomme", "banane", "peche"];

d(liste_fruits);
console.log(liste_fruits);

for (var i = 0; i < liste_fruits.length; i++) {
    d(liste_fruits[i]);
}

//afficher seulement les bananes.

for (var i = 0; i < liste_fruits.length; i++) {

    if (liste_fruits[i] == "banane") {
        d(liste_fruits[i]);
    }
}

for (var indice in liste_fruits){
    d(indice + " : " + liste_fruits[indice]);
}

//afficher seulement les pêches.

for (var indice in liste_fruits){

    if (liste_fruits[indice] == "peche"){
    d(indice + " : " + liste_fruits[indice]);
}
}

var list_contact = [["jean","pierre","paul","rachid"], [14,78,47,18,4]];

console.log(list_contact);

d(list_contact[0][2]);

for (var i = 0; i < list_contact.length; i++){
    d(list_contact[i]);

}

// une boucle imbriquée

for(i = 0; i < list_contact.length; i++){
    for(j=0; j < list_contact[i].length; j++){
        d("tableau numero : " + i + " indice numero : " + j + " : " + list_contact[i][j]);
    }
}

d("<h2>Object</h2>");

var monObjet = {};

monObjet.nom = "ESCOBAR";
monObjet.prenom = "Pablo";
monObjet.age = 45;

d(monObjet.prenom + " " + monObjet.age);

var Humain = {
    sexe : 'male',
    origine : "x ou y",
    age : 30
}

d(Humain.sexe);

Humain.couleur = "vert";

d(Humain.couleur);

var Voiture = {
    marque: "Mercedes",
    modele: "class A",
    couleur: "noire",
    changerCouleur: function(nouvelleCouleur){
            //Voiture.couleur = "rose";
        return this.couleur = nouvelleCouleur;
    },
    optionsDeSerie: ["clim","auto-radio","park-assist"],
    annee: 2017,
    motorisation: {
        energie:"diesel",
        puissance: "110 cv"
    }
};

d(Voiture.modele);
d(Voiture.couleur);
Voiture.changerCouleur("violet");
d(Voiture.couleur);
d(Voiture.optionsDeSerie[1]);
d(Voiture.motorisation.energie);

for(var elements in Voiture){
    d("mes propriétés : " + elements + " valeur : " + Voiture[elements]);

    if(typeof Voiture[elements] == "object"){
        for(var elemts in Voiture.motorisation){
            d("propriétés : " + elemts + " valeur : " + Voiture.motorisation[elemts]);
        }
    }
}

