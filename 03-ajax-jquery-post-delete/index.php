<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="ajax3.js"></script>

    <title>AJAX DELETE JQUERY </title>
</head>

<body>
    <div class="container">
            
        <h1 class="display-4 text-center">AJAX DELETE JQUERY</h1> <hr>

        <!-- Exo : réaliser en PHP un sélécteur permettant d'afficher tout les noms des employés -->

        <form method="" action="" class="col-md-9 offset-md-3">
        
        
            <?php   
                require_once('init.php');

                $result = $bdd->query('SELECT * FROM employes');
                var_dump($result);
            ?>
            <div id="employes">
                <div class="form-group">
                    <label for="personne">Liste des employés</label>
                    <select class="form-control" id="personne" name = "personne">
                        <?php while($employe = $result->fetch(PDO::FETCH_ASSOC)):
                        ?>

                        <?php 
                            // echo '<pre>'; print_r($employe); echo '</pre>'; 
                        ?>
                            
                        <option value="<?= $employe['id_employes'] ?>"> <?= $employe['nom'] ?> 
                        </option>
                        
                        <?php endwhile;?>

                    </select>
                </div>
            </div>
            <input type="submit" id="submit" value="supprimer" class="col-md-12 btn btn-dark mt2">
        </form>
    </div>

</body>

</html>