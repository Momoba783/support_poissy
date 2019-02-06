$(document).ready(function(){
    $('#action').click(function(event){
        event.preventDefault();
        ajax();
    });

    function ajax(){
        var personne = $("#personne").val();// permet de selectionner la valeur saisie dans le champ 'input'
        console.log(personne);

        var parameters = "personne="+personne; // permet de definir les paramètres qui seront envoyés avec la requête HTTP AJAX 'aller'
        //'personne=' permet de préciser que l'indice $_POST[personne] du fichier ajax2.php sera égal à la valeur que l'on a saisie dans le champ 
        // c'est le ce paramètre que l'on transmet au fichier PHP via la requête AJAX
        console.log(parameters);

        $.post("ajax2.php", parameters, function(data){
            $("#resultat").html(data.resultat); // on sélectionne la div id "resultat" dans laquelle on accroche la réponse de la requête 'retour' AJAX
            // data. resultat --> 'resultat' correspond au tableau ARRAY défini dans le fichier PHP
        }, 'json');
        /*
        post() est une méthode JQUERY êrmettant d'envoyer des requêtes AJAX via la méthode 'post'
        arguments :
        1 --> URL de destination
        2 --> paramètres a transmettre à la requête AJAX
        3 --> en cas de succès, la réponse de la requête 'retour' sera stockée dans 'data
        4 --> type de données, dans notre cas, encodage en JSON pour véhiculer les données
        */
    }
});