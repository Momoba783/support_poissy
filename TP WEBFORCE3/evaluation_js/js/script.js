var jour = document.getElementById('selectJour');
var mois = document.getElementById('selectMois');
var annee = document.getElementById('selectAnnee');

var date = new Date();

var j = date.getDate();
var m = date.getMonth()+1;
var a = date.getFullYear();

jour.innerHTML += "<option>" + j + "</option>";
mois.innerHTML += "<option>" + m + "</option>"; 
annee.innerHTML += "<option>" + a + "</option>";

function Clients(nomSociete,nom,rue,cpVille,num){
    this.nomSociete = nomSociete,
    this.nom = nom,
    this.rue = rue,
    this.cpVille = cpVille,
    this.num = num    
}

Tonkam = new Clients("Edition Tonkam","Françoise Chang","8 Rue Léon Jouhaux","75010 Paris","01 56 03 92 20");
Hakusensha = new Clients("Hakusensha Corp","Takanori Uno","3-13, Jinbo cho, Kanda, Chiyoda-ku","Tokyo, Japon","81 3 3358 8574");
Glenat = new Clients("Editions Glénat","Guy Delcourt","39 Rue du Gouverneur Général Éboué","92130 Issy-les-Moulineaux","01 57 03 92 28");
Shueisha = new Clients("Shueisha inc.","Marue Horiuchi","5-43, Shinjuku, Kanda, Chiyoda-ku","Tokyo, Japon","81 3 3230 6320");
Soleil = new Clients("Soleil Manga","Marine Barrière","44 rue Baudin","83107 Toulon Cedex","04 94 18 51 85");