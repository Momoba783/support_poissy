$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        // alert ("ok");
        ajax();
    });

    function ajax(){
        var id= $('#personne').val();
        console.log(id);

        var parameters ="id="+id;
        console.log(parameters);

        $.post("ajax4.php", parameters, function(data){
            $("#tableau").html(data.resultat);
        }, 'json');
    }
});