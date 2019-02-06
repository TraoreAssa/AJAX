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
            
            3- Dans le fichier ajaxX.php, réaliser la requete php permettant de selectionner un employé dans la BDD
            4- Réaliser le traitement permettant d'afficher les données d'un employé dans le fichier ajaxX.php
            5- Encoder en json

            6- Réaliser le traitement JS permettent d'envoyer les requetes AJAX dans le fichier ajax4.js
            
    -->
        
        <h1 class="display-4 text-center">AJAX FILTRE JQUERY</h1> <hr>

        <h2 class="display-6 text-center">Filtre :</h2>

        <div id="resultat"></div>

        <form methode = "post" id="formulaire" class = "col-md-7 offset-md-3">

        <?php   
            require_once('init.php');
    
            $resultat1 = $bdd->query('SELECT DISTINCT (service) FROM employes');
            
        ?>

        <div class="form-group">

            <!-- ------------------Sexe----------------------- -->
                <label for="sexe">Sexe</label>
                <select class="form-control " name="sexe" id="sexe">
                    <option value="m">Homme</option>
                    <option value="f">Femme</option>
                </select>

                <br>

            <!-- ------------------Service----------------------- -->
                <label for="service">Service</label>       
                <select class="form-control" id="services" name = "services">
                    <?php while($service = $resultat1->fetch(PDO::FETCH_ASSOC)):
                            ?>
                        <option value="<?= $service['service'] ?>"> <?= $service['service'] ?> 
                        </option>
                            
                    <?php endwhile;?>
    
                </select>

                <br>
            <!-- ------------------ Date embauche----------------------- -->

                <label for="date_embauche">Date</label>
                comprise entre le <input type="date" id="date_embauche" name="date_embauche" class="col-md-4"> 
                <label for="date_embauche1">et</label> <input type="date" id="date_embauche1" name="date_embauche1" class="col-md-4">

                <br>
                <br>
                
            <!-- ------------------Salaire----------------------- -->

                <label for="salaire">Salaire</label> compris entre <input type="number" id="salaire" name="salaire" class="col-md-4"> 
                <label for="salaire1">et</label> <input type="number" id="salaire1" name="salaire1" class="col-md-4">
                
                <br>
                <br>
                <input type="submit" id="filtrer" value="Filter" class="col-md-12  btn btn-dark">

            </div> 
        </form>

       

    </div>

    

   


</body>

</html>