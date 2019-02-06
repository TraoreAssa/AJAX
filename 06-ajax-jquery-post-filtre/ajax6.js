$(document).ready(function(){
    $('#filtrer').click(function (event){
        event.preventDefault();
        //alert("c'est ok!!");

        ajax();

    });

    function ajax(){
        
        var sexe = $("#sexe").val();
        console.log(sexe);
        var salaire = $("#salaire").val();
        console.log(salaire);
        var salaire1 = $("#salaire1").val();
        console.log(salaire1);
        var services = $("#services").val();
        console.log(services);
        var date_embauche = $("#date_embauche").val();
        console.log(date_embauche);
        var date_embauche1 = $("#date_embauche1").val();
        console.log(date_embauche1);

        //---------------------reprise $_POST[]!!
        var parameter = 'sex=' + sexe + '&salaire=' + salaire + '&salaire1=' + salaire1 + '&service=' + services + '&data_embauche=' + date_embauche + '&data_embauche1=' + date_embauche1;
        console.log(parameter);


        $.post('ajax6.php', parameter,function(data){
            $('#resultat').html(data.resultat);
        }, 'json');

        // $('#formulaire').trigger("reset");

    }
});