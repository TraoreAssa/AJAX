$(document).ready(function(){
    $("#action").click(function(event){
        event.preventDefault();
        // alert('Test OK')
        ajax();
    });
    function ajax (){
        var personne = $("#personne").val(); //permet de selectionner la valeur saisie dans le champ 'input'
        console.log(personne);

        var parameters = "personne="+personne; 
       /*  Permet de définir les paramettre qui serons envoyés avec la requete HTTP AJAX 'aller'
        ->'Personne = ' permet de préciser que l'index $_POST [personne] du fichier ajax2.php sera égal a la valeur que l'on a saisie dans le champ
        C'est ce parametre que l'on transet au fichier PHP via la requete AJAX
         */
        //personne = $_POST["personne"] dans ajax2.php
        console.log(parameters);

        //
        $.post("ajax2.php", parameters, function(data){
            $("#resultat").html(data.resultat);
            // On selectionne la div id 'resultat' dans laquelle on accroche la réponse de la requete 'retour AJAX
            //data.resultat --> 'resultat' correspond au tableau ARRAY définit dans le fichier PHP
        }, 'json');
        /* 
            ->post() est une méthode JQUERY permettant d'envoyer des requetes AJAX via la méthode 'post'
            1--> URL de destination
            2--> Parametres à transmettre à la requete AJAX
            3--> En cas de sucés, la reponse de la requete 'retour' sera stocké dans 'data'
            4--> Tyoe de donnée, dans notre cas, encodage en JSON pour vehiculer les données
        */
    }
});