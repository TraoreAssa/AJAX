$(document).ready(function(){
    $("#afficher").click(function(event){
        event.preventDefault();
        
        ajax();
    });

        function ajax()
        {
            var id = $("#employes").val();
            console.log(id);
            var parameters = 'id='+id;

            $.post("ajax4.php",parameters,function(data){
                $("#employes").html(data.resultat);
            }, 'json');
        }
    });