<?php
    require_once("init.php");
    $table = array();

    
    $resultat = $bdd->exec("SELECT * FROM employes WHERE id_employes = '$_POST[id]'");

    $table['resultat'] .= '<table>';    
    
    $table['resultat'] .= '<tr>';
    $table['resultat'] .= '<td> Id employes</td>';
    $table['resultat'] .= '<td> Nom</td>';
    $table['resultat'] .= '<td> Prenom</td>';
    $table['resultat'] .= '<td> Date</td>';
    $table['resultat'] .= '<td> Salaire</td>';
    $table['resultat'] .= '</tr>';


    $table['resultat'] .= '<tr>';
    $table['resultat'] .= '<td id="id_employes"></td>';
    $table['resultat'] .= '<td id="nom"></td>';
    $table['resultat'] .= '<td id="prenom"></td>';
    $table['resultat'] .= '<td id="date"></td>';
    $table['resultat'] .= '<td id="salaire"></td>';
    $table['resultat'] .= '</tr>';
    $table['resultat'] .= '</table>';






    echo json_encode($table);

?>