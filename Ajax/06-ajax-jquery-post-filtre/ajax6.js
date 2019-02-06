$(document).ready(function() {
    $("#filtrer").click(function(event) {
        event.preventDefault();
        ajax();
    });

    function ajax()
    {
        var service = $("#service").val();
        var salaireUn = $("#salaire1").val();
        var salaireDeux = $("#salaire2").val();
        var dateUn = $("#date1").val();
        var dateDeux = $("#date2").val();
        var sexe = $("input[name=choix]:checked").val();

        var parameters = "service="+service+"&dateUn="+dateUn+"&dateDeux="+dateDeux+"&salaireUn="+salaireUn+"&salaireDeux="+salaireDeux+"&sexe="+sexe;
        console.log(parameters);

        $.post("ajax6.php", parameters, function(data) {
            $("#resultat").html(data.resultat); 
        }, "json");

    }

});