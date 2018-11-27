/**
 * Created by yassine on 1/12/18.
 */
var level_up = 100;

function Personnage(pseudo, classe, race, arme) {
    this.pseudo = pseudo;
    this.force = 0;
    this.sante = 0;
    this.classe = classe;
    this.race = race;
    this.arme = arme,
    this.xp = 0;
    this.level = 1;
	
	//var monHero = new Personnage("kirikou","chasseur","elfe","epee");
	//monHero.decrire()
    this.decrire = function () {
		
        switch(this.arme){
            case "epee":this.force = 35;
            break;
            case "baton":this.force = 15;
            break;
            case "arc":this.force = 25;
            break;
            default: this.force = 10;
            break;
        }

        switch(this.classe){
            case "Guerrier":this.sante = 135;
                break;
            case "Magicien":this.sante = 115;
                break;
            case "Chasseur":this.sante = 125;
                break;
            default: this.sante = 100;
                break;
        }

        document.write("je vous présentes : " + this.pseudo + ' un ' + this.classe + ' avec ' + this.sante + " points de vies" + " de la race des " + this.race + ' et une force de ' + this.force + " et son arme " + this.arme + " avec " + this.xp + " points d'experiences et au niveau " + this.level +'<br><br>');
        },

		//monHero.attaquer(monstre)
        this.attaquer = function (cible) {
            if(cible.sante > 0) {
                var degats = this.force;
                document.write(this.pseudo + " attaque " + cible.pseudo + " et lui fait " + degats + " points de dégâts" + '<br><br>');
                cible.sante= cible.sante - degats;
                if(cible.sante <= 0) {
                    cible.sante = 0;
                    document.write(cible.pseudo + " est mort !!<br><br>");
                    this.xp += 100*50/100;
                    if(this.xp >= level_up) {
                        this.level += 1;
                        document.write("Level Up !<br><br>");
                        this.xp = 0;
                        level_up += level_up*25/100;
                    }
                }
                document.write(cible.pseudo + " lui reste " + cible.sante + " points de vies<br><br>");
            }
        },

        this.soigner = function(cible){
            if(this.classe == 'Magicien'){
                cible.sante = cible.sante + (cible.sante * 50/100);
                document.write(this.pseudo + " : tu as soigné " + cible.pseudo + '<br><br>');
            } else {
                document.write(this.pseudo + " : tu n'as pas le pouvoir de soigner <br><br>");
            }
        },
		
        this.prendrePotionSoins = function(){
            if(this.sante == 0){
                document.write("tu es mort tu ne peux pas te soigner !<br><br>");
            }
            else{
                this.sante = this.sante + (this.sante * 20/100);
                document.write(this.pseudo + " a prit une potion de vie sa sante est maintenant de : "+ this.sante +"<br><br>");
            }

        },
        this.prendrePotionForce = function(){
            if(this.sante == 0){
                document.write("tu es mort tu ne peux pas prendre de potion de force !<br><br>");
            }else{
                this.force = this.force + (this.force * 15/100);
                document.write(this.pseudo + " a prit une potion de force sa force est maintenant de : " + this.force +"<br><br>");
            }

        }
}

var guerrier = new Personnage("Conan","Guerrier", "Humain", "epee");
var chasseur = new Personnage("Hunter","Chasseur", "Elfe", "arc");
var magicien = new Personnage("Gandalf","Magicien", "Nain", "baton");
var monstre = new Personnage("Monster","Guerrier", "Orc", "dague");
var monstre2 = new Personnage("Monster2","Guerrier", "Orc", "dague");
var monstre3 = new Personnage("Monster3","Guerrier", "Orc", "dague");
guerrier.decrire();
chasseur.decrire();
magicien.decrire();
monstre.decrire();
guerrier.attaquer(monstre);
guerrier.attaquer(monstre);
guerrier.attaquer(monstre);
guerrier.attaquer(monstre);
guerrier.decrire();
guerrier.attaquer(monstre2);
guerrier.attaquer(monstre2);
guerrier.attaquer(monstre2);
monstre3.decrire();
magicien.attaquer(monstre3);
chasseur.attaquer(monstre3);
monstre3.attaquer(magicien);
monstre3.attaquer(magicien);
monstre3.attaquer(magicien);
magicien.prendrePotionSoins();
magicien.prendrePotionForce();
magicien.soigner(guerrier);
guerrier.decrire();