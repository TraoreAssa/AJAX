<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="ajax6.js"></script>

    <title>AJAX FILTRE JQUERY </title>
</head>

<body>
    <div class="container">

    <!-- 
        Exo : Réaliser un filtre sur la table 'employés'
        Filtre réaliser avec 4 valeurs 
            - Sexe
            - Service 
            - date embauche
            - Salaire

        
            2- Réaliser le selecteur en php de tout les employés dans index.php

            3- Dans le fichier ajax5.php, réaliser la requete php permettant de selectionner un employé dans la BDD
            4- Réaliser le traitement permettant d'afficher les données d'un employé dans le fichier ajax4.php
            5- Encoder en json

            6- Réaliser le traitement JS permettent d'envoyer les requetes AJAX dans le fichier ajax4.js
            
    -->
        
        <h1 class="display-4 text-center">AJAX FILTRE JQUERY</h1> <hr>

        <h2 class="display-6 text-center">Filtre :</h2>

        
        <form methode = "post" id="formulaire" class = "col-md-7 offset-md-3">
        <?php   
            require_once('init.php');
    
            $resultat = $bdd->query('SELECT * FROM employes');
            var_dump($resultat);
        ?>
            <div class="form-group">

            <!-- ------------------Sexe----------------------- -->
                <select class="form-control " name="sexe" id="sexe">
                    <label for="sexe">Sexe</label>
                    <option value="m">Homme</option>
                    <option value="f">Femme</option>
                </select>

                <br>

            <!-- ------------------Service----------------------- -->
                <select class="form-control" id="services" name = "services">
                    <?php while($servi = $resultat->fetch(PDO::FETCH_ASSOC)):
                            ?>
                        <label for="service">Service</label>       
                        <option value="<?= $servi['service'] ?>"> <?= $servi['service'] ?> 
                        </option>
                            
                    <?php endwhile;?>
    
                </select>

                <br>
            <!-- ------------------ Date embauche----------------------- -->

                <label for="">Date</label>
                compris entre le <input type="date"> et <input type="date">

                <br>
                
            <!-- ------------------Salaire----------------------- -->

                <label for="salaire">Salaire</label>compris entre <input type="text"> et <input type="text">
                
                <br>
                <input type="submit" id="afficher" value="Afficher">

            </div> 
        </form>

        <div id="resultat"></div>

    </div>

    

   


</body>

</html>