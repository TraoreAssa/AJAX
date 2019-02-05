$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        // alert("Tout est OK!!");
        ajax()

    });

    function ajax()
    {
        var id = $("#personne").val();
        console.log(id);

        var parameters = 'id='+id;
        //toujours utiliser l'id!
        console.log(parameters);

        $.post("ajax3.php",parameters,function(data){
            $("#employes").html(data.resultat);
        }, 'json');
    }
});