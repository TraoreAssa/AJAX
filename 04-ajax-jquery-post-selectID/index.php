<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="ajax4.js"></script>
    <title>AJAX JQUERY </title>
</head>
<body>
<div class="container">
            
            <h1 class="display-4 text-center">AJAX JQUERY</h1> <hr>
    
            <!-- Exo : réaliser en PHP un sélécteur permettant d'afficher tout les noms des employés -->
    
            <form method="" action="" class="col-md-6 offset-md-3">
            
                <?php   
                    require_once('init.php');
    
                    $resultat = $bdd->query('SELECT * FROM employes');
                    var_dump($resultat);
                ?>
                <div id="employes">
                        <select class="form-control" id="employes" name = "employes">
                            <?php while($employe = $resultat->fetch(PDO::FETCH_ASSOC)):
                            ?>
                                
                            <option value="<?= $employe['id_employes'] ?>"> <?= $employe['nom'] ?> 
                            </option>
                            
                            <?php endwhile;?>
    
                        </select>
                        <input type="submit" id="afficher" value="Afficher">
                </div>
            </form>

            <table>
                <tr>
                    <td>Id employés</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Date d'embauche</td>
                </tr>

                <tr>
                    <td id="id_employes"></td>
                    <td id="nom"></td>
                    <td id="prenom"></td>
                    <td id="date"></td>
                    <td id="salaire"></td>
            
                </tr>

            </table>
        </div>
    
</body>
</html>