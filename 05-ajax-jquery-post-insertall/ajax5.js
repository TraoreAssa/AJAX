$(document).ready(function(){
    $("#action").click(function(event){
        event.preventDefault();
        // alert('Test OK')
        ajax();
    });
    
    
    function ajax (){
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var sexe = $("#sex").val();
        var service = $("#service").val();
        var date_embauche = $("#data_embauche").val();
        var salaire = $("#salaire").val();

        console.log(" " + nom + " " + prenom + '  ' +  sexe + '  ' + service + '  ' + date_embauche + '  ' + salaire);

        var parameters = "nom="+nom + "&prenom="+prenom + "&sex="+sexe + "&service="+service + "&data_embauche=" + date_embauche + "&salaire="+salaire; 

        console.log(parameters);


        $.post("ajax5.php", parameters, function(data){
            $("#resultat").html(data.resultat);
        }, 'json');

        $('#formulaire').trigger("reset");//reboot le formulaire apres insertion (efface les donnée aprés insertion)
       
    }


});