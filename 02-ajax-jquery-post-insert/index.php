<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="ajax2.js"></script>

    <title>AJAX INSERT JQUERY </title>
</head>

<body>
    <div class="container">
        
        <h1 class="display-4 text-center">AJAX INSERT JQUERY</h1> <hr>

        <div id="resultat"></div>

        <form methode = "post" class = "col-md-6 offset-md-3">
            <div class="form-group">


                <label for="exampleInputEmail1">Employé à insérer</label>
                <input type="text" class="form-control" id="personne" name ="personne" aria-describedby="emailHelp" placeholder="Enter Empoyé">
                
                <button type="submit" id="action" class="col-md-12 btn btn-primary">Insérer</button>

            </div>
    </div>

    </form>


    

   


</body>

</html>