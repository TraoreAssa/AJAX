$(document).ready(function(){
    $("#afficher").click(function(event){
        event.preventDefault();
        // alert("ok");
        
        ajax();
    });

        function ajax()
        {
            var id = $("#personne").val();
            console.log(id);
            var parameters = 'id='+id;

            $.post("ajax4.php",parameters,function(data){
                $("#resultat").html(data.resultat);
            }, 'json');
        }
});