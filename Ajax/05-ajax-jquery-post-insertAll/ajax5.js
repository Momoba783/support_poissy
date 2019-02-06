$(document).ready(function(){
    $('#action').click(function(event){
        event.preventDefault();
        ajax();
    });

    function ajax(){
        var prenom = $("#prenom").val();
        var nom = $("#nom").val();
        var sexe = $("#sexe").val();
        var service = $("#service").val();
        var date_embauche = $("#date").val();
        var salaire = $("#salaire").val();
        console.log(prenom + nom + sexe + service + date_embauche + salaire);

        var parameters = "prenom="+prenom + "&nom="+nom + "&sexe="+sexe + "&service="+service + "&date_embauche="+date_embauche + "&salaire="+salaire;
        console.log(parameters);

        $.post("ajax5.php", parameters, function(data){
            $("#resultat").html(data.resultat);
        }, 'json');

        $("#formulaire").trigger("reset"); //reboot le formulaire après insertion
    }
});