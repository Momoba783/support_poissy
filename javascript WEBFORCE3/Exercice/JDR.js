function d(arg) {
    document.write(arg + "<br>");
}

function Joueur(pseudo, sante,niveau,xp, classe, race, armes){
    this.pseudo = pseudo,
    this.sante = sante,
    this.niveau = niveau,
    this.xp = xp,
    this.classe = classe,
    this.race = race,
    this.armes = armes
    this.presentation = function(){

        d(this.pseudo +" ,  avec " + this.sante +" points de vie , de type " + this.race + " , et de classe " + this.classe + " avec " +  this.xp + " point d'experiences et de niveau " + this.niveau + ". La " + this.armes + " est son arme de prédilection <br>");
    }
}

var player1 = new Joueur("Cyclope", 140, 1, 0, 20, "mutant", "Visionlaser");
var player2 = new Joueur("Tornade", 110, 1, 0, 30, "deesse", "Foudre");
var player3 = new Joueur("Magneto", 180, 1, 0, 10, "mechant", "Mechancete");
var player4 = new Joueur("Wolverine", 140, 1, 0, 20, "sauvage", "Griffe");
var player5 = new Joueur("Phoenix", 80, 1, 0, 50, "boss", "Telekinesie");



player1.presentation();
player2.presentation();
player3.presentation();
player4.presentation();
player5.presentation(); 
















