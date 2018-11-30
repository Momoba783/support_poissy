/*  Récupération de la Date et Affichage en pré-séléction */
var jour = document.getElementById('selectJour');
var mois = document.getElementById('selectMois');
var annee = document.getElementById('selectAnnee');

var date = new Date();

var j = date.getDate();
var m = date.getMonth() + 1;
var a = date.getFullYear();

var ab = a - 20;

jour.innerHTML += "<option>" + j + "</option>";
mois.innerHTML += "<option>" + m + "</option>";
annee.innerHTML += "<option>" + a  + "</option>";

for(i = 1; i <= 31; i++){
    jour.innerHTML += "<option>" + i + "</option>";
 }
 for(i = 1; i <= 12; i++){
    mois.innerHTML += "<option>" + i + "</option>";
 }
 for(i = ab; i <= date.getFullYear() + 20; i++){
    annee.innerHTML += "<option>" + i + "</option>";
 }
/* Récupération des informations saisies pour les libellés du footer */
var nomFacturant = document.getElementsByClassName('nomSociete');
var libelle1 = document.getElementById('nomfacturant').value;

var telFacturant = document.getElementsByClassName('telSociete').value;
var libelle2 = document.getElementById('telfacturant');

var mailFacturant = document.getElementsByClassName('mailSociete').value;
var libelle3 = document.getElementById('mailfacturant');

var list_info_facturant = [nomFacturant, telFacturant, mailFacturant];
for (var i = 0; i < list_info_facturant.length; i++) {
    if ([i] == 0) {
        document.getElementById('nomfacturant').innerHTML = list_info_facturant[0];
    }
    if ([i] == 1) {
        document.getElementById('telfacturant').innerHTML = list_info_facturant[1];
    }
    if ([i] == 2) {
        document.getElementById('mailfacturant').innerHTML = list_info_facturant[2];
    };
};


/* Tableau informations clients avec select option */

var nvclient = document.getElementById('selectA')
var shueisha = document.getElementById('selectB')
var tonkam = document.getElementById('selectC')
var soleil = document.getElementById('selectD')
var hakusensha = document.getElementById('selectE')
var glenat = document.getElementById('selectF')

function Clients(nomSociete, nom, rue, cpVille, num) {
    this.nomSociete = nomSociete,
        this.nom = nom,
        this.rue = rue,
        this.cpVille = cpVille,
        this.num = num
}
var tonkam = new Clients("Edition tonkam", "Françoise Chang", "8 Rue Léon Jouhaux", "75010 Paris", "01 56 03 92 20");
var hakusensha = new Clients("hakusensha Corp", "Takanori Uno", "3-13, Jinbo cho, Kanda, Chiyoda-ku", "Tokyo, Japon", "81 3 3358 8574");
var glenat = new Clients("Editions Glénat", "Guy Delcourt", "39 Rue du Gouverneur Général Éboué", "92130 Issy-les-Moulineaux", "01 57 03 92 28");
var shueisha = new Clients("shueisha inc.", "Marue Horiuchi", "5-43, Shinjuku, Kanda, Chiyoda-ku", "Tokyo, Japon", "81 3 3230 6320");
var soleil = new Clients("soleil Manga", "Marine Barrière", "44 rue Baudin", "83107 Toulon Cedex", "04 94 18 51 85");

var selectA = document.getElementById('select_clients');
var selectB = document.getElementById('select_clientsb');

var optionA = document.getElementById('selectA');
var optionB = document.getElementById('selectB');
var optionC = document.getElementById('selectC');
var optionD = document.getElementById('selectD');
var optionE = document.getElementById('selectE');
var optionF = document.getElementById('selectF');
var optionG = document.getElementById('selectG');
var optionH = document.getElementById('selectH');
var optionI = document.getElementById('selectI');
var optionJ = document.getElementById('selectJ');
var optionK = document.getElementById('selectK');
var optionL = document.getElementById('selectL');


var inputA = document.getElementById('inputA');
var inputB = document.getElementById('inputB');
var inputC = document.getElementById('inputC');
var inputD = document.getElementById('inputD');
var inputE = document.getElementById('inputE');
var inputF = document.getElementById('inputF');
var inputG = document.getElementById('inputG');
var inputH = document.getElementById('inputH');
var inputI = document.getElementById('inputI');
var inputJ = document.getElementById('inputJ');

// A : 

if (select_clients.value = selectB) {
    inputF.value = shueisha.nomSociete;
    inputG.value = shueisha.nom;
    inputH.value = shueisha.rue;
    inputI.value = shueisha.cpVille;
    inputJ.value = shueisha.num;
} else if (select_clients.value = selectC) {
    inputF.value = tonkam.nomSociete;
    inputG.value = tonkam.nom;
    inputH.value = tonkam.rue;
    inputI.value = tonkam.cpVille;
    inputJ.value = tonkam.num;
} else if (select_clients.value = selectD) {
    inputF.value = soleil.nomSociete;
    inputG.value = soleil.nom;
    inputH.value = soleil.rue;
    inputI.value = soleil.cpVille;
    inputJ.value = soleil.num;
} else if (select_clients.value = selectE) {
    inputF.value = hakusensha.nomSociete;
    inputG.value = hakusensha.nom;
    inputH.value = hakusensha.rue;
    inputI.value = hakusensha.cpVille;
    inputJ.value = hakusensha.num;
} else if (select_clients.value = selectF) {
    inputF.value = glenat.nomSociete;
    inputG.value = glenat.nom;
    inputH.value = glenat.rue;
    inputI.value = glenat.cpVille;
    inputJ.value = glenat.num;
}

// EXPEDIER A :

if (select_clientsb.value = selectG) {
    inputF.value = shueisha.nomSociete;
    inputG.value = shueisha.nom;
    inputH.value = shueisha.rue;
    inputI.value = shueisha.cpVille;
    inputJ.value = shueisha.num;
} else if (select_clientsb.value = selectH) {
    inputF.value = tonkam.nomSociete;
    inputG.value = tonkam.nom;
    inputH.value = tonkam.rue;
    inputI.value = tonkam.cpVille;
    inputJ.value = tonkam.num;
} else if (select_clientsb.value = selectI) {
    inputF.value = soleil.nomSociete;
    inputG.value = soleil.nom;
    inputH.value = soleil.rue;
    inputI.value = soleil.cpVille;
    inputJ.value = soleil.num;
} else if (select_clientsb.value = selectJ) {
    inputF.value = hakusensha.nomSociete;
    inputG.value = hakusensha.nom;
    inputH.value = hakusensha.rue;
    inputI.value = hakusensha.cpVille;
    inputJ.value = hakusensha.num;

} else if (select_clientsb.value = selectK) {
    inputA.value = glenat.nomSociete;
    inputG.value = glenat.nom;
    inputH.value = glenat.rue;
    inputI.value = glenat.cpVille;
    inputJ.value = glenat.num;
}