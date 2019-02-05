<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="ajax5.js"></script>

    <title>AJAX INSERT ALL JQUERY </title>
</head>

<body>
    <div class="container">

    <!-- 
        Exo : Améliorer l'enemple n°2 en faisant en sort d'inserer toute les valeurs dans les colonnes de la tables "employes" (prenom, nom, sexe, service, date_embauche, salaire) 

            3- Dans le fichier ajax5.php, réaliser la requete php permettant de selectionner un employé dans la BDD
            4- Réaliser le traitement permettant d'afficher les données d'un employé dans le fichier ajax4.php
            5- Encoder en json

            6- Réaliser le traitement JS permettent d'envoyer les requetes AJAX dans le fichier ajax4.js
            
    -->
        
        <h1 class="display-4 text-center">AJAX INSERT ALL JQUERY</h1> <hr>

        

        <h2 class="display-6 text-center">Nouvelle Entrée:</h2>

        <div id="resultat"></div>
        
        <form methode = "post" id="formulaire" class = "col-md-6 offset-md-3">
            <div class="form-group">


                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="nom" name ="nom" placeholder="Nom de l'employé">
                <br>

                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" class="form-control" id="prenom" name ="prenom" placeholder="Prenom de l'employé">
                <br>

                <div class="form-group">
                    <label for="sex">Sexe</label>
                    <select class="form-control" id="sex" name="sex">
                    <option value="m">Homme</option>
                    <option value="f">Femme</option>
                    </select>
                </div>

                <label for="exampleInputEmail1">Service</label>                
                <input type="text" class="form-control" id="service" name ="service" placeholder="Service de l'employé">
                <br>

                <label for="exampleFormControlSelect1" id="sex">Date d'embauche </label>
                <input type="date" class="form-control" id="data_embauche" name ="date_embauche" placeholder="Date d'embauche de de l'employé">
                <br>

                <label for="exampleFormControlSelect1" id="sex">Salaire </label>
                <input type="text" class="form-control" id="salaire" name ="salaire" placeholder="Salaire de l'employé">
                <br>
                <br>
    
                <button type="submit" id="action" class="col-md-4 offset-md-4 btn btn-primary">Insérer</button>

                
                

            </div>

            
    </div>

    </form>


    

   


</body>

</html>