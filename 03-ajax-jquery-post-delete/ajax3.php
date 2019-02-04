<?php
    require_once("init.php");
    $tab = array();

    //------------REQUETE 'ALLER' AJAX
    $result = $bdd->exec("DELETE FROM employes WHERE id_employes = '$_POST[id]'");
    // $result = $bdd->exec("DELETE FROM employes WHERE id_employes = 1001");

    /* 
    On test la requete PHP, en fait si il y a des erreures dans le fichiers PHP? les requetes AJAX ne passeront pas! TOUJOURS CONTROLER LES FICHIER PHP!!!
    */

    //---------- REQUETE 'RETOUR' AJAX

    $result = $bdd->query("SELECT * FROM employes");
    $tab['resultat'] = '<div class="form-group">';
    $tab['resultat'] .= '<label for="personne">Liste des employés</label>';
    $tab['resultat'] .= '<select class="form-control" id="personne" name = "personne">';
    while($employe = $result->fetch(PDO::FETCH_ASSOC))
    {
        $tab['resultat'] .= "<option value= '$employe[id_employes]'> $employe[nom] </option>";
    }

    $tab['resultat'].= '</select>';
    $tab['resultat'].= '</div>';


    echo json_encode($tab);

?>