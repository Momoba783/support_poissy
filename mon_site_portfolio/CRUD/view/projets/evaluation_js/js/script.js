/* Récupération des informations saisies pour les libellés du footer */

var nomFacturant = document.getElementsByClassName('nomSociete');
var libelle1 = document.getElementById('nomfacturant');

var telFacturant = document.getElementsByClassName('telSociete');
var libelle2 = document.getElementById('telfacturant');

var mailFacturant = document.getElementsByClassName('mailSociete');
var libelle3 = document.getElementById('mailfacturant');


function remplib(span, input) {
    span.innerHTML = input.value;
}

nomFacturant[0].onkeyup = function () {
    remplib(libelle1, nomFacturant[0]);

}

telFacturant[0].onkeyup = function () {
    remplib(libelle2, telFacturant[0]);

}
mailFacturant[0].onkeyup = function () {
    remplib(libelle3, mailFacturant[0]);

}


/*  Récupération de la Date et Affichage en pré-séléction 10 ans avant / 10 ans après 2018*/
var jour = document.getElementById('selectJour');
var mois = document.getElementById('selectMois');
var annee = document.getElementById('selectAnnee');

var date = new Date();

var j = date.getDate();
var m = date.getMonth() + 1;
var a = date.getFullYear();

var ab = a - 10;

jour.innerHTML += "<option>" + j + "</option>";
mois.innerHTML += "<option>" + m + "</option>";
annee.innerHTML += "<option>" + a + "</option>";

for (i = 1; i <= 31; i++) {
    jour.innerHTML += "<option>" + i + "</option>";
}
for (i = 1; i <= 12; i++) {
    mois.innerHTML += "<option>" + i + "</option>";
}
for (i = ab; i <= date.getFullYear() + 10; i++) {
    annee.innerHTML += "<option>" + i + "</option>";
}


//A :
/* Tableau informations clients avec select option de Gauche*/

//Définition des variables
var inputA = document.getElementById('inputA');
var inputB = document.getElementById('inputB');
var inputC = document.getElementById('inputC');
var inputD = document.getElementById('inputD');
var inputE = document.getElementById('inputE');
//Objet définissant ses caractéristiques
function Clients(nomSociete, nom, rue, cpVille, num) {
    this.nomSociete = nomSociete,
        this.nom = nom,
        this.rue = rue,
        this.cpVille = cpVille,
        this.num = num
}
//Function remplissant les input avec les caractéristiques de la fonction précédente
function choixclient(choix, info, editeur) {
    if (choix.value == info) {
        inputA.value = editeur.nomSociete;
        inputB.value = editeur.nom;
        inputC.value = editeur.rue;
        inputD.value = editeur.cpVille;
        inputE.value = editeur.num;
    }
}
//Création des données utilisés pour le select-option.
var nc = new Clients("", "", "", "", "");
var tonkam = new Clients("Edition tonkam", "Françoise Chang", "8 Rue Léon Jouhaux", "75010 Paris", "01 56 03 92 20");
var hakusensha = new Clients("Hakusensha Corp", "Takanori Uno", "3-13, Jinbo cho, Kanda, Chiyoda-ku", "Tokyo, Japon", "81 3 3358 8574");
var glenat = new Clients("Editions Glénat", "Guy Delcourt", "39 Rue du Gouverneur Général Éboué", "92130 Issy-les-Moulineaux", "01 57 03 92 28");
var shueisha = new Clients("Shueisha Inc.", "Marue Horiuchi", "5-43, Shinjuku, Kanda, Chiyoda-ku", "Tokyo, Japon", "81 3 3230 6320");
var soleil = new Clients("Soleil Manga", "Marine Barrière", "44 rue Baudin", "83107 Toulon Cedex", "04 94 18 51 85");

//Appel des fonctions avec l'event "onclick" 
select_clients.onclick = function () {
    choixclient(select_clients, "Nouveau client", nc);
    choixclient(select_clients, "Shueisha Inc.", shueisha);
    choixclient(select_clients, "Editions Tonkam", tonkam);
    choixclient(select_clients, "Soleil Manga", soleil);
    choixclient(select_clients, "Hakusensha Corp.", hakusensha);
    choixclient(select_clients, "Editions Glénat", glenat);
}



// EXPEDIER A :
// /* Tableau informations clients avec select option  de Droite */

//Définition des variables
var inputF = document.getElementById('inputF');
var inputG = document.getElementById('inputG');
var inputH = document.getElementById('inputH');
var inputI = document.getElementById('inputI');
var inputJ = document.getElementById('inputJ');
//Objet définissant ses caractéristiques
function Clients2(nomSociete, nom, rue, cpVille, num) {
    this.nomSociete = nomSociete,
        this.nom = nom,
        this.rue = rue,
        this.cpVille = cpVille,
        this.num = num
}
//Function remplissant les input avec les caractéristiques de la fonction précédente
function choixclient2(choix, info, editeur) {
    if (choix.value == info) {
        inputF.value = editeur.nomSociete;
        inputG.value = editeur.nom;
        inputH.value = editeur.rue;
        inputI.value = editeur.cpVille;
        inputJ.value = editeur.num;
    }
}
//Création des données utilisés pour le select-option.
var nc = new Clients2("", "", "", "", "");
var pika = new Clients2("Pika Editions", "Guy Delcourt", "58 58 rue Jean Bleuzen, 92170 Vanves", "75010 Paris", "01 56 03 92 20");
var kana = new Clients2("Kana", "Anne-Cécile Connet", "Rue Moussorgski 15-27", "75010 Paris", "01 57 03 92 28");
var kodansha = new Clients2("Kodansha", "Shuji Takizawa", "3-13, Jinbo cho, Kanda, Chiyoda-ku", " Tokyo, Japon", "81 3 3230 6328");
var humanoides = new Clients2("Les Humanoïdes associés", "Pascal Lafine", "24, avenue Philippe Auguste", "75011 Paris", "01 49 29 88 88");
var kaze = new Clients2("Kazé Manga", "Clémence Perrot", "45 rue de Tocqueville", "75010 Paris", "01 53 26 32 32 ");
//Appel des fonctions avec l'event "onclick" 
select_clientsb.onclick = function () {
    choixclient2(select_clientsb, "Nouveau client", nc);
    choixclient2(select_clientsb, "Pika Editions", pika);
    choixclient2(select_clientsb, "Kodansha", kodansha);
    choixclient2(select_clientsb, "Kana", kana);
    choixclient2(select_clientsb, "Les Humanoïdes associés", humanoides);
    choixclient2(select_clientsb, "Kazé Manga", kaze);
}


// TABLEAU DE COMMANDE Détails des produits facturés :

//définition des variables
var selectCodeA = document.getElementById('selectCodeA');
var selectCodeB = document.getElementById('selectCodeB');
var selectCodeC = document.getElementById('selectCodeC');
var selectCodeD = document.getElementById('selectCodeD');
var selectCodeE = document.getElementById('selectCodeE');

var libelleA = document.getElementById('libelleA');
var prixA = document.getElementById('prixA');
var quantiteA = document.getElementById('quantiteA');

var libelleB = document.getElementById('libelleB');
var prixB = document.getElementById('prixB');
var quantiteB = document.getElementById('quantiteB');

var libelleC = document.getElementById('libelleC');
var prixC = document.getElementById('prixC');
var quantiteC = document.getElementById('quantiteC');

var libelleD = document.getElementById('libelleD');
var prixD = document.getElementById('prixD');
var quantiteD = document.getElementById('quantiteD');
//Objet définissant ses caractéristiques
function CodeProduit(libelle, prix, montant) {
    this.libelle = libelle,
        this.prix = prix,
        this.montant = montant;
}

//Function remplissant les <td> avec les caractéristiques de la fonction précédente
function ChoixProduit(select, valeurSelect, libelle, prix, element1, element2) {
    if (select.value == valeurSelect) {
        element1.innerHTML = libelle;
        element2.innerHTML = prix;
    }
}
//Appel des fonctions avec l'event "onclick" 
selectCodeA.onclick = function () {
    ChoixProduit(selectCodeA, "123456789101OP", "One Piece", 5.95, libelleA, prixA);
    ChoixProduit(selectCodeA, "234567891011DB", "Dragon Ball", 6.15, libelleA, prixA);
    ChoixProduit(selectCodeA, "345678910111FMA", "Full Metal Alchemist", 7.05, libelleA, prixA);
    ChoixProduit(selectCodeA, "456789101112N", "Naruto", 5.95, libelleA, prixA);
    ChoixProduit(selectCodeA, "567891011121GTO", "Great Teacher Onizuka", 5.99, libelleA, prixA);
};

selectCodeB.onclick = function () {
    ChoixProduit(selectCodeB, "123456789101OP", "One Piece", 5.95, libelleB, prixB);
    ChoixProduit(selectCodeB, "234567891011DB", "Dragon Ball", 6.15, libelleB, prixB);
    ChoixProduit(selectCodeB, "345678910111FMA", "Full Metal Alchemist", 7.05, libelleB, prixB);
    ChoixProduit(selectCodeB, "456789101112N", "Naruto", 5.95, libelleB, prixB);
    ChoixProduit(selectCodeB, "567891011121GTO", "Great Teacher Onizuka", 5.99, libelleB, prixB);
};

selectCodeC.onclick = function () {
    ChoixProduit(selectCodeC, "123456789101OP", "One Piece", 5.95, libelleC, prixC);
    ChoixProduit(selectCodeC, "234567891011DB", "Dragon Ball", 6.15, libelleC, prixC);
    ChoixProduit(selectCodeC, "345678910111FMA", "Full Metal Alchemist", 7.05, libelleC, prixC);
    ChoixProduit(selectCodeC, "456789101112N", "Naruto", 5.95, libelleC, prixC);
    ChoixProduit(selectCodeC, "567891011121GTO", "Great Teacher Onizuka", 5.99, libelleC, prixC);
};


selectCodeD.onclick = function () {
    ChoixProduit(selectCodeD, "123456789101OP", "One Piece", 5.95, libelleD, prixD);
    ChoixProduit(selectCodeD, "234567891011DB", "Dragon Ball", 6.15, libelleD, prixD);
    ChoixProduit(selectCodeD, "345678910111FMA", "Full Metal Alchemist", 7.05, libelleD, prixD);
    ChoixProduit(selectCodeD, "456789101112N", "Naruto", 5.95, libelleD, prixD);
    ChoixProduit(selectCodeD, "567891011121GTO", "Great Teacher Onizuka", 5.99, libelleD, prixD);
};

//Calcul du montant en fonction du prix unitaire et de la quantité dans le 1er tableau (montant = quantité x prix unitaire)
var quantiteA = document.getElementById('quantiteA');
var quantiteB = document.getElementById('quantiteB');
var quantiteC = document.getElementById('quantiteC');
var quantiteD = document.getElementById('quantiteD');

var montantA = document.getElementById("montantA");
var montantB = document.getElementById("montantB");
var montantC = document.getElementById("montantC");
var montantD = document.getElementById("montantD");
var s = document.getElementById("sousTotal");
var tva = document.getElementById('tva');
var manutention = document.getElementById('manutention');
var totalTTC = document.getElementById('totalTTC');
var remise = document.getElementById('ghost');
var remiseValeur = document.getElementById('remise');
function calcmontant(montant, prix, quantite) {
    montant.innerHTML = prix * quantite;
    calcst(s);
    calctva(s);
    calcmanu(manutention);
    calctotal(totalTTC);
    ghostRemise(Number(s.innerHTML));
}

calcmontant(montantA, prixA.innerHTML, quantiteA.innerHTML);
calcmontant(montantB, prixB.innerHTML, quantiteB.innerHTML);
calcmontant(montantC, prixC.innerHTML, quantiteC.innerHTML);
calcmontant(montantD, prixD.innerHTML, quantiteD.innerHTML);

quantiteA.onkeyup = function () {
    calcmontant(montantA, prixA.innerHTML, quantiteA.value);
}
quantiteB.onkeyup = function () {
    calcmontant(montantB, prixB.innerHTML, quantiteB.value);
}
quantiteC.onkeyup = function () {
    calcmontant(montantC, prixC.innerHTML, quantiteC.value);
}
quantiteD.onkeyup = function () {
    calcmontant(montantD, prixD.innerHTML, quantiteD.value);
};

// Calcul du sous-total : Addition des montants A,B,C,D.
function calcst(s) {
    var z = Number(montantA.innerHTML) + Number(montantB.innerHTML) + Number(montantC.innerHTML) + Number(montantD.innerHTML);
    s.innerHTML = z.toFixed(2);
}

// Calcul TVA 20% : Sous-Total + Tva 20%.

function calctva(s) {
    var taxe = Number(s.innerHTML) * 20 / 100;
    tva.innerHTML = taxe;
}

// Calcul Port & Manutention : Tva + 40€.

function calcmanu(m) {
    var port = Number(tva.innerHTML);
    m.innerHTML = 40; 

}

// Calcul du Total TTC : Tva + Port & Manutention.

function calctotal(totalTTC) {
    var total = Number(tva.innerHTML) + Number(manutention.innerHTML);
    totalTTC.innerHTML = total;
}

// Partie remise #Ghost

function ghostRemise(totalTTC) {
    if (totalTTC >= 1000) {
        remise.setAttribute('style', "display:block");
        var cinq = (totalTTC * 5 / 100).toFixed(2);
        remiseValeur.innerHTML = cinq;
    } else if (totalTTC <= 1000) {
        remise.setAttribute('style', "display:none");
    }
}