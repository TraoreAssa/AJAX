<?php
require_once('init.php');
$tab = array();


if(!empty($_POST['personne'])){
    $result = $bdd->exec("INSERT INTO employes (prenom) VALUES ('$_POST[personne]')");
    // $result = $bdd->exec("INSERT INTO employes (prenom) VALUES ('Assa')");
    
    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-success">L\'employé ' .$_POST['personne'] .' a bien été enregistré! </div>';
}
else{
    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-danger"> Merci de renseigner le champ !!</div>';
}
echo json_encode($tab); // On encode en JSON le tableau ARRAY, c'est la reponse de la requete AJAX, sans ce format de donnée, on ne pourrait vehiculer des données en HTTP